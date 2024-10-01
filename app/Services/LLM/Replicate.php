<?php

namespace App\Services\LLM;

use App\Models\LLMResponse;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Replicate
{
    private string $apiKey;
    private string $baseUrl = 'https://api.replicate.com';

    public function __construct()
    {
        $this->apiKey = config('services.replicate.api_key');
    }

    public function promptAsync(string $llm, string $prompt, Model $relatedEntity = null): object
    {
        $uuid = Str::uuid();

        $url = "{$this->baseUrl}/v1/models/{$llm}/predictions";

        $response = Http::withHeaders([
            "Authorization" => "Bearer $this->apiKey",
        ])->post($url, [
            "webhook" => config('services.replicate.webhook_url') . $uuid,
            "webhook_events_filter" => ["completed"],
            "input" => [
                "stream" => false,
                "prompt" => $prompt,
                "max_new_tokens" => 2048,
                "prompt_template" => "<|begin_of_text|><|start_header_id|>system<|end_header_id|>\n\n{system_prompt}<|eot_id|><|start_header_id|>user<|end_header_id|>\n\n{prompt}<|eot_id|><|start_header_id|>assistant<|end_header_id|>\n\n"
            ]
        ]);

        $LLMResponse = new LLMResponse();
        $LLMResponse->id = $uuid;
        $LLMResponse->prompt = $prompt;
        $LLMResponse->prompt_timestamp = now();
        $LLMResponse->llm = $llm;
        $LLMResponse->save();

        $relatedEntity?->llmResponses()->save($LLMResponse);

        return $LLMResponse;
    }

    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): object
    {
        $LLMResponse = $this->promptAsync($llm, $prompt, $relatedEntity);

        $maxTotalWaitTime = 10;
        $sleepTime = 1;
        sleep($sleepTime);
        $LLMResponse = $LLMResponse->fresh();
        while ($LLMResponse->response === null && now()->lte(now()->addSeconds($maxTotalWaitTime))) {
            $LLMResponse = $LLMResponse->fresh();
            sleep($sleepTime);
        }

        return $LLMResponse;
    }
}
