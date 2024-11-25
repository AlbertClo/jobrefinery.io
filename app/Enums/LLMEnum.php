<?php

namespace App\Enums;

use App\Enums\Contracts\SeedableEnum;
use App\Enums\Traits\SeedableEnumTrait;
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
    case META_LLAMA_3_8B_INSTRUCT = "meta/meta-llama-3-8b-instruct";
    case MISTRAL_7B_INSTRUCT_V_0_2 = "mistralai/mistral-7b-instruct-v0.2";
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
                "provider" => 'Anthropic',
                "description" => null,
                "input_token_cost_per_million" => 0.25,
                "output_token_cost_per_million" => 1.25,
            ],
            self::CLAUDE_3_SONNET => [
                "slug" => $this->value,
                "name" => 'Claude 3.0 Sonnet',
                "provider" => 'Anthropic',
                "description" => null,
                "input_token_cost_per_million" => 3,
                "output_token_cost_per_million" => 15,
            ],
            self::CLAUDE_3_OPUS => [
                "slug" => $this->value,
                "name" => 'Claude 3.0 Opus',
                "provider" => 'Anthropic',
                "description" => null,
                "input_token_cost_per_million" => 15,
                "output_token_cost_per_million" => 75,
            ],
            self::GPT_4O_MINI => [
                "slug" => $this->value,
                "name" => 'GPT-4o mini',
                "provider" => 'OpenAI',
                "description" => null,
                "input_token_cost_per_million" => 0.15,
                "output_token_cost_per_million" => 0.6,
            ],
            self::GPT_4_TURBO => [
                "slug" => $this->value,
                "name" => 'GPT-4 turbo',
                "provider" => 'OpenAI',
                "description" => null,
                "input_token_cost_per_million" => 10,
                "output_token_cost_per_million" => 30,
            ],
            self::GPT_4O => [
                "slug" => $this->value,
                "name" => 'GPT-4o',
                "provider" => 'OpenAI',
                "description" => null,
                "input_token_cost_per_million" => 5,
                "output_token_cost_per_million" => 15,
            ],
            self::META_LLAMA_3_8B_INSTRUCT => [
                "slug" => $this->value,
                "name" => 'Meta Llama 3.8B Instruct',
                "provider" => 'Replicate',
                "description" => null,
                "input_token_cost_per_million" => 0.05,
                "output_token_cost_per_million" => 0.25,
            ],
            self::MISTRAL_7B_INSTRUCT_V_0_2 => [
                "slug" => $this->value,
                "name" => 'Mistral 7B Instruct v0.2',
                "provider" => 'Replicate',
                "description" => null,
                "input_token_cost_per_million" => 0.05,
                "output_token_cost_per_million" => 0.25,
            ],
            self::LLAMA3_1_70B => [
                "slug" => $this->value,
                "name" => 'Llama 3.1 70B',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_2_1B => [
                "slug" => $this->value,
                "name" => 'Llama 3.2 1B',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_2_3B => [
                "slug" => $this->value,
                "name" => 'Llama 3.2 3B',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_2_3B_INSTRUCT_Q80 => [
                "slug" => $this->value,
                "name" => 'Llama 3.2 3B Instruct Q80',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
        };
    }
}
