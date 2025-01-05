<?php

namespace App\Services\LLM;

use App\Models\LLM;
use App\Models\LLMResponse;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;

class HuggingFace
{
    private string $apiKey;
    private string $baseUrl = 'https://api-inference.huggingface.co/models/';

    public function __construct()
    {
        $this->apiKey = config('services.hugging-face.api_key');
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse
    {
        dump($llm);
        $uuid = Str::uuid();
        $promptTimestamp = now();
        $response = Http::withHeaders([
            "Authorization" => "Bearer $this->apiKey",
        ])->post($this->baseUrl . $llm . '/v1/chat/completions', [
            "model" => $llm,
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ],
            "max_tokens" => 2048,
            "stream" => false,
        ]);

        $responseBody = json_decode($response->body());

        dump($responseBody);

        $llmModel = LLM::where('slug', $llm)->first();
        $cost = $llmModel->input_token_cost_per_million * $responseBody->usage->prompt_tokens / 1000000 +
            $llmModel->output_token_cost_per_million * $responseBody->usage->completion_tokens / 1000000;

        $LLMResponse = new LLMResponse();
        $LLMResponse->id = $uuid;
        $LLMResponse->prompt = $prompt;
        $LLMResponse->prompt_timestamp = $promptTimestamp;
        $LLMResponse->llm = $llm;
        $LLMResponse->response = $responseBody->choices[0]->message->content;
        $LLMResponse->response_timestamp = now();
        $LLMResponse->input_tokens = $responseBody->usage->prompt_tokens;
        $LLMResponse->output_tokens = $responseBody->usage->completion_tokens;
        $LLMResponse->cost = $cost;
        $LLMResponse->save();

        $relatedEntity?->llmResponses()->save($LLMResponse);

        return $LLMResponse;
    }
}
