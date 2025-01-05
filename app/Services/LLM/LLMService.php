<?php

namespace App\Services\LLM;

use App\Models\LLMResponse;
use App\Models\SeedableEnums\LLMEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;

class LLMService implements LLMInterface
{
    /**
     * @throws ConnectionException
     */
    public function prompt(
        string $llm,
        string $prompt,
        Model $relatedEntity = null,
        float $temperature = 0.7,
    ): LLMResponse {
        $llmEnum = LLMEnum::from($llm);

        return $llmEnum->getData()["provider"]->getServiceClass()->prompt($llm, $prompt, $relatedEntity, $temperature);
    }
}
