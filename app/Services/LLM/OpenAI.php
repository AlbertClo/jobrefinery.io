<?php

namespace App\Services\LLM;

use App\Models\LLM;
use App\Models\LLMResponse;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;

class OpenAI
{
    private string $apiKey;
    private string $baseUrl = 'https://api.openai.com/v1/chat/completions';

    public function __construct()
    {
        $this->apiKey = config('services.openai.api_key');
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse
    {
        $uuid = Str::uuid();
        $promptTimestamp = now();
        $response = Http::withHeaders([
            "Authorization" => "Bearer $this->apiKey",
        ])->post($this->baseUrl, [
            "model" => $llm,
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ]
        ]);

        $responseBody = json_decode($response->body());

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
