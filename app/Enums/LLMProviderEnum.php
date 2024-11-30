<?php

namespace App\Enums;

enum LLMProviderEnum: string
{
    case OPEN_AI = "OpenAI";
    case ANTHROPIC = "Anthropic";
    case OLLAMA = "Ollama";
}
