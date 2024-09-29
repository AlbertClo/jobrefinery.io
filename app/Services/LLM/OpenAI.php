<?php

namespace App\Services\LLM;

use App\Models\StaticData\LLMData;
use Http;
use Illuminate\Http\Client\ConnectionException;
use stdClass;

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
    public function prompt4oMini($prompt): object
    {
        return $this->prompt($prompt, LLMData::GPT_4O_MINI);
    }

    /**
     * @throws ConnectionException
     */
    public function prompt4Turbo($prompt): object
    {
        return $this->prompt($prompt, LLMData::GPT_4_TURBO);
    }

    /**
     * @throws ConnectionException
     */
    public function prompt4o($prompt): object
    {
        return $this->prompt($prompt, LLMData::GPT_4O);
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $prompt, string $model): object
    {
        $response = Http::withHeaders([
            "Authorization" => "Bearer $this->apiKey",
        ])->post($this->baseUrl, [
            "model" => $model,
            "messages" => [
                ["role" => "user", "content" => $prompt]
            ]
        ]);


        return $this->formatResponse($response);
    }

    private function formatResponse(object $response): object
    {
        $response = json_decode($response->body());

        $object = new stdClass();
        $object->answer = $response->choices[0]->message->content;
        $object->token_cost = new stdClass();
        $object->token_cost->input_tokens = $response->usage->prompt_tokens;
        $object->token_cost->output_tokens = $response->usage->completion_tokens;

        return $object;
    }
}
