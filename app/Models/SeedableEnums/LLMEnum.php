<?php

namespace App\Models\SeedableEnums;

use App\Enums\LLMProviderEnum;
use App\Models\SeedableEnums\Contracts\SeedableEnum;
use App\Models\SeedableEnums\Traits\SeedableEnumTrait;
use App\Models\LLM;

enum LLMEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    case CLAUDE_3_HAIKU = "claude-3-haiku-20240307";
    case CLAUDE_3_SONNET = "claude-3-5-sonnet-20240620";
    case CLAUDE_3_OPUS = "claude-3-opus-20240229";
    case GPT_4O_MINI = "gpt-4o-mini";
    case GPT_4_TURBO = "gpt-4-turbo";
    case GPT_4O = "gpt-4o";
    case LLAMA3_1_70B = "llama3.1:70b";
    case LLAMA3_2_1B = "llama3.2:1b";
    case LLAMA3_2_3B = "llama3.2:3b";
    case LLAMA3_2_3B_INSTRUCT_Q80 = "llama3.2:3b-instruct-q8_0";

    public static function getModelClass(): string
    {
        return LLM::class;
    }

    public function getData(): array
    {
        return match($this) {
            self::CLAUDE_3_HAIKU => [
                "slug" => $this->value,
                "name" => 'Claude 3.0 Haiku',
                "provider" => LLMProviderEnum::ANTHROPIC,
                "description" => null,
                "input_token_cost_per_million" => 0.25,
                "output_token_cost_per_million" => 1.25,
            ],
            self::CLAUDE_3_SONNET => [
                "slug" => $this->value,
                "name" => 'Claude 3.0 Sonnet',
                "provider" => LLMProviderEnum::ANTHROPIC,
                "description" => null,
                "input_token_cost_per_million" => 3,
                "output_token_cost_per_million" => 15,
            ],
            self::CLAUDE_3_OPUS => [
                "slug" => $this->value,
                "name" => 'Claude 3.0 Opus',
                "provider" => LLMProviderEnum::ANTHROPIC,
                "description" => null,
                "input_token_cost_per_million" => 15,
                "output_token_cost_per_million" => 75,
            ],
            self::GPT_4O_MINI => [
                "slug" => $this->value,
                "name" => 'GPT-4o mini',
                "provider" => LLMProviderEnum::OPEN_AI,
                "description" => null,
                "input_token_cost_per_million" => 0.15,
                "output_token_cost_per_million" => 0.6,
            ],
            self::GPT_4_TURBO => [
                "slug" => $this->value,
                "name" => 'GPT-4 turbo',
                "provider" => LLMProviderEnum::OPEN_AI,
                "description" => null,
                "input_token_cost_per_million" => 10,
                "output_token_cost_per_million" => 30,
            ],
            self::GPT_4O => [
                "slug" => $this->value,
                "name" => 'GPT-4o',
                "provider" => LLMProviderEnum::OPEN_AI,
                "description" => null,
                "input_token_cost_per_million" => 5,
                "output_token_cost_per_million" => 15,
            ],
            self::LLAMA3_1_70B => [
                "slug" => $this->value,
                "name" => 'Llama 3.1 70B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_2_1B => [
                "slug" => $this->value,
                "name" => 'Llama 3.2 1B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_2_3B => [
                "slug" => $this->value,
                "name" => 'Llama 3.2 3B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_2_3B_INSTRUCT_Q80 => [
                "slug" => $this->value,
                "name" => 'Llama 3.2 3B Instruct Q80',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
        };
    }
}
