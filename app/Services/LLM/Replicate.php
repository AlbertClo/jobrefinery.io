<?php

namespace App\Services\LLM;

use App\Models\LLMResponse;
use App\Models\StaticData\LLMData;
use Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;
use stdClass;

class Replicate
{
    private string $apiKey;
    private string $baseUrl = 'https://api.replicate.com';

    public function __construct()
    {
        $this->apiKey = config('services.replicate.api_key');
    }

    /**
     * @throws ConnectionException
     */
    public function promptMetaLlama38bInstruct($prompt): object
    {
        return $this->prompt($prompt, LLMData::META_LLAMA_3_8B_INSTRUCT);
    }

    /**
     * @throws ConnectionException
     */
    public function promptMistral7bInstructV0_2($prompt): object
    {
        return $this->prompt($prompt, LLMData::MISTRAL_7B_INSTRUCT_V_0_2);
    }

    public function promptAsync(string $prompt, string $model): object
    {
        $uuid = Str::uuid();

        $url = "{$this->baseUrl}/v1/models/{$model}/predictions";

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
        $LLMResponse->llm = $model;
        $LLMResponse->save();

        return $LLMResponse;
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $prompt, string $model): object
    {
        $LLMResponse = $this->promptAsync($prompt, $model);

        $maxTotalWaitTime = 10;
        $sleepTime = 1;
        sleep($sleepTime);
        $LLMResponse = $LLMResponse->fresh();
        while ($LLMResponse->response === null && now()->lte(now()->addSeconds($maxTotalWaitTime))) {
            $LLMResponse = $LLMResponse->fresh();
            sleep($sleepTime);
        }

        return $this->formatResponse($LLMResponse);
    }

    private function formatResponse(object $response): object
    {
        $object = new stdClass();
        $object->answer = $response->response;
        $object->token_cost = new stdClass();
        $object->token_cost->input_tokens = $response->input_tokens;
        $object->token_cost->output_tokens = $response->output_tokens;

        return $object;
    }
}
