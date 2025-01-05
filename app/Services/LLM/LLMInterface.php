<?php

namespace App\Services\LLM;

use App\Models\LLMResponse;
use Illuminate\Database\Eloquent\Model;

interface LLMInterface
{
    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse;
}
