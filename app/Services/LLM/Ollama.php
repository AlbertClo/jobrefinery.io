<?php

namespace App\Services\LLM;

use App\Models\LLMResponse;
use App\Models\StaticData\LLMData;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;

class Ollama
{
    private string $url;

    public function __construct()
    {
        $this->url = config('services.ollama.base_url') . '/api/generate';
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse
    {
        $uuid = Str::uuid();
        $promptTimestamp = now();
        $response = Http::post('http://ollama:11434/api/generate', [
            'model' => LLMData::LLAMA3_2_3B,
            'prompt' => $prompt,
            'stream' => false
        ]);

        $responseBody = json_decode($response->body());

        $LLMResponse = new LLMResponse();
        $LLMResponse->id = $uuid;
        $LLMResponse->prompt = $prompt;
        $LLMResponse->prompt_timestamp = $promptTimestamp;
        $LLMResponse->llm = $llm;
        $LLMResponse->response = $responseBody->response;
        $LLMResponse->response_timestamp = now();
        $LLMResponse->input_tokens = 0;
        $LLMResponse->output_tokens = 0;
        $LLMResponse->cost = 0;
        $LLMResponse->save();

        $relatedEntity?->llmResponses()->save($LLMResponse);

        return $LLMResponse;
    }
}
