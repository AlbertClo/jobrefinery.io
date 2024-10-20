<?php

namespace App\Services\LLM;

use App\Actions\Jobs\UseLLMResponse;
use App\Models\LLM;
use App\Models\LLMResponse;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;

class Anthropic
{
    private string $apiKey;
    private string $baseUrl = 'https://api.anthropic.com/v1/messages';

    public function __construct()
    {
        $this->apiKey = config('services.anthropic.api_key');
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse
    {
        $uuid = Str::uuid();
        $promptTimestamp = now();
        $response = Http::withHeaders([
            "x-api-key" => $this->apiKey,
            "anthropic-version" => "2023-06-01",
        ])->post($this->baseUrl, [
            "model" => $llm,
            "max_tokens" => 1024,
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ]
        ]);

        $responseBody = json_decode($response->body());

        $llmModel = LLM::where('slug', $llm)->first();
        $cost = $llmModel->input_token_cost_per_million * $responseBody->usage->input_tokens / 1000000 +
            $llmModel->output_token_cost_per_million * $responseBody->usage->output_tokens / 1000000;
        $LLMResponse = new LLMResponse();
        $LLMResponse->id = $uuid;
        $LLMResponse->prompt = $prompt;
        $LLMResponse->prompt_timestamp = $promptTimestamp;
        $LLMResponse->llm = $llm;
        $LLMResponse->response = $responseBody->content[0]->text;
        $LLMResponse->response_timestamp = now();
        $LLMResponse->input_tokens = $responseBody->usage->input_tokens;
        $LLMResponse->output_tokens = $responseBody->usage->output_tokens;
        $LLMResponse->cost = $cost;
        $LLMResponse->save();

        $relatedEntity?->llmResponses()->save($LLMResponse);

        UseLLMResponse::dispatch($LLMResponse);

        return $LLMResponse;
    }
}
