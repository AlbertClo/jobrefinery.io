<?php

namespace App\Services\LLM;

use App\Models\StaticData\LLMData;
use Http;
use Illuminate\Http\Client\ConnectionException;
use stdClass;

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
    public function promptHaiku(string $prompt): object
    {
        return $this->prompt($prompt, LLMData::CLAUDE_3_HAIKU);
    }

    /**
     * @throws ConnectionException
     */
    public function promptSonnet($prompt): object
    {
        return $this->prompt($prompt, LLMData::CLAUDE_3_SONNET);
    }

    /**
     * @throws ConnectionException
     */
    public function promptOpus($prompt): object
    {
        return $this->prompt($prompt, LLMData::CLAUDE_3_OPUS);
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $prompt, string $model): object
    {
        $response = Http::withHeaders([
            "x-api-key" => $this->apiKey,
            "anthropic-version" => "2023-06-01",
        ])->post($this->baseUrl, [
            "model" => $model,
            "max_tokens" => 1024,
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
        $object->answer = $response->content[0]->text;
        $object->token_cost = new stdClass();
        $object->token_cost->input_tokens = $response->usage->input_tokens;
        $object->token_cost->output_tokens = $response->usage->output_tokens;

        return $object;
    }
}
