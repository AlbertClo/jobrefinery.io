<?php

namespace App\Services\LLM\Providers;

use App\Models\LLM;
use App\Models\LLMResponse;
use App\Services\LLM\LLMInterface;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;

class Alibaba implements LLMInterface
{
    private string $apiKey;
    private string $baseUrl = 'https://dashscope-intl.aliyuncs.com/compatible-mode/v1/chat/completions';


    public function __construct()
    {
        $this->apiKey = config('services.alibaba.api_key');
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse
    {
        $uuid = Str::uuid();
        $promptTimestamp = now();
        $response = Http::withHeaders([
            "Content-Type" => "application/json",
            "Authorization" => "Bearer $this->apiKey",
        ])->post($this->baseUrl, [
            "model" => $llm,
            "frequency_penalty" => 0.0,
            "max_tokens" => 2048,
            "presence_penalty" => 0.0,
            "response_format" => ["type" => "text"],
            'stream' => false,
            "messages" => [
                ["role" => "user", "content" => $prompt],
            ]
        ]);

        $responseBody = json_decode($response->body());

        $llmModel = LLM::where('slug', $llm)->first();
        $cost = $llmModel->input_token_cost_per_million * $responseBody->usage->prompt_cache_miss_tokens / 1000000 +
            $llmModel->input_token_cost_per_million / 3.857142857 * $responseBody->usage->prompt_cache_hit_tokens / 1000000 +
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
        $LLMResponse->extra = $responseBody;
        $LLMResponse->cost = $cost;
        $LLMResponse->save();

        $relatedEntity?->llmResponses()->save($LLMResponse);

        return $LLMResponse;
    }
}
