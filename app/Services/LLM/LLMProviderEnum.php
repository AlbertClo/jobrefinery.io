<?php

namespace App\Services\LLM;

use App\Services\LLM\Providers\Anthropic;
use App\Services\LLM\Providers\HuggingFace;
use App\Services\LLM\Providers\Ollama;
use App\Services\LLM\Providers\OpenAI;

enum LLMProviderEnum: string
{
    case OPEN_AI = "OpenAI";
    case ANTHROPIC = "Anthropic";
    case OLLAMA = "Ollama";
    case HUGGING_FACE = "Hugging Face";

    public function getServiceClass(): LLMInterface
    {
        return match ($this) {
            self::OPEN_AI => new OpenAI(),
            self::ANTHROPIC => new Anthropic(),
            self::OLLAMA => new Ollama(),
            self::HUGGING_FACE => new HuggingFace(),
        };
    }
}
