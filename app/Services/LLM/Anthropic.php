<?php

namespace App\Services\LLM;

use Http;
use Illuminate\Http\Client\ConnectionException;

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
    public function promptHaiku(string $prompt): string
    {
        return $this->prompt($prompt, 'claude-3-haiku-20240307');
    }

    /**
     * @throws ConnectionException
     */
    public function promptHaikuTerse(string $prompt): string
    {
        return $this->prompt("$prompt. Be terse.", 'claude-3-haiku-20240307');
    }

    /**
     * @throws ConnectionException
     */
    public function promptSonnet($prompt): string
    {
        return $this->prompt($prompt, 'claude-3-5-sonnet-20240620');
    }

    /**
     * @throws ConnectionException
     */
    public function promptOpus($prompt): string
    {
        return $this->prompt($prompt, 'claude-3-opus-20240229');
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $prompt, string $model): string
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

        return $response->body();
    }
}
