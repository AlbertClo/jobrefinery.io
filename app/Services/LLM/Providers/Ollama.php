<?php

namespace App\Services\LLM\Providers;

use App\Models\LLMResponse;
use App\Services\LLM\LLMInterface;
use Carbon\Carbon;
use Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Ollama implements LLMInterface
{
    private string $url;

    public function __construct()
    {
        $this->url = config('services.ollama.base_url') . '/api/generate';
    }

    /**
     * @throws ConnectionException
     */
    public function prompt(
        string $llm,
        string $prompt,
        Model $relatedEntity = null,
        float $temperature = 0.7,
    ): LLMResponse {
        Carbon::setTestNow(null);
        Carbon::serializeUsing(function ($carbon) {
            return $carbon->format('Y-m-d H:i:s.u');
        });

        $uuid = Str::uuid();
        $promptTimestamp = DB::raw("to_timestamp(" . microtime(true) . ")");
        $response = Http::timeout(0)->post($this->url, [
            'model' => $llm,
            'prompt' => $prompt,
            'stream' => false,
            'temperature' => $temperature,
        ]);

        $responseBody = json_decode($response->body());

        $LLMResponse = new LLMResponse();
        $LLMResponse->id = $uuid;
        $LLMResponse->prompt = $prompt;
        $LLMResponse->temperature = $temperature;
        $LLMResponse->prompt_timestamp = $promptTimestamp;
        $LLMResponse->llm = $llm;
        $LLMResponse->response = $responseBody->response;
        $LLMResponse->response_timestamp = DB::raw("to_timestamp(" . microtime(true) . ")");
        $LLMResponse->input_tokens = 0;
        $LLMResponse->output_tokens = 0;
        $LLMResponse->cost = 0;
        $LLMResponse->save();

        $relatedEntity?->llmResponses()->save($LLMResponse);

        return $LLMResponse;
    }
}
