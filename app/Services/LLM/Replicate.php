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
                "max_new_tokens" => 512,
                "prompt_template" => "<|begin_of_text|><|start_header_id|>system<|end_header_id|>\n\n{system_prompt}<|eot_id|><|start_header_id|>user<|end_header_id|>\n\n{prompt}<|eot_id|><|start_header_id|>assistant<|end_header_id|>\n\n"
            ]
        ]);

        $llmPrompt = new LLMResponse();
        $llmPrompt->id = $uuid;
        $llmPrompt->prompt = $prompt;
        $llmPrompt->prompt_timestamp = now();
        $llmPrompt->llm = $model;
        $llmPrompt->save();

        return $llmPrompt;
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $prompt, string $url): object
    {
        return $this->promptAsync($prompt, $url);

        // long poll database for response

        //return $this->formatResponse($response);
    }

    private function formatResponse(object $response): object
    {
        $response = json_decode($response->body());

        dd($response);

        $object = new stdClass();
        $object->answer = $response->choices[0]->message->content;
        $object->token_cost = new stdClass();
        $object->token_cost->input_tokens = $response->usage->prompt_tokens;
        $object->token_cost->output_tokens = $response->usage->completion_tokens;

        return $object;
    }
}
