<?php

namespace App\Enums;

use App\Services\LLM\LLMInterface;
use App\Services\LLM\Providers\Alibaba;
use App\Services\LLM\Providers\Anthropic;
use App\Services\LLM\Providers\AwsBedrock;
use App\Services\LLM\Providers\DeepSeek;
use App\Services\LLM\Providers\HuggingFace;
use App\Services\LLM\Providers\Ollama;
use App\Services\LLM\Providers\OpenAI;

enum LLMProviderEnum: string
{
    case OPEN_AI = "OpenAI";
    case ANTHROPIC = "Anthropic";
    case DEEPSEEK = "DeepSeek";
    case ALIBABA = "Alibaba";
    case AWS_BEDROCK = "AWS Bedrock";
    case OLLAMA = "Ollama";
    case HUGGING_FACE = "Hugging Face";

    public function getServiceClass(): LLMInterface
    {
        return match ($this) {
            self::OPEN_AI => new OpenAI(),
            self::ANTHROPIC => new Anthropic(),
            self::DEEPSEEK => new DeepSeek(),
            self::ALIBABA => new Alibaba(),
            self::AWS_BEDROCK => new AwsBedrock(),
            self::OLLAMA => new Ollama(),
            self::HUGGING_FACE => new HuggingFace(),
        };
    }
}
