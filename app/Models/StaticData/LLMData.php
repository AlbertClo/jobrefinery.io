<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class LLMData implements StaticDataContract
{
    public const string CLAUDE_3_HAIKU = "claude-3-haiku-20240307";
    public const string CLAUDE_3_SONNET = "claude-3-5-sonnet-20240620";
    public const string CLAUDE_3_OPUS = "claude-3-opus-20240229";
    public const string GPT_4O_MINI = "gpt-4o-mini";
    public const string GPT_4_TURBO = "gpt-4-turbo";
    public const string GPT_4O = "gpt-4o";
    public const string META_LLAMA_3_8B_INSTRUCT = "meta/meta-llama-3-8b-instruct";
    public const string MISTRAL_7B_INSTRUCT_V_0_2 = "mistralai/mistral-7b-instruct-v0.2";
    public const string LLAMA3_1_70B = "llama3.1:70b";
    public const string LLAMA3_2_1B = "llama3.2:1b";
    public const string LLAMA3_2_3B = "llama3.2:3b";
    public const string LLAMA3_2_3B_INSTRUCT_Q80 = "llama3.2:3b-instruct-q8_0";

    public static function getModelClass(): string
    {
        return \App\Models\LLM::class;
    }

    public static function getData(): array
    {
        return [
            [
                "slug" => self::CLAUDE_3_HAIKU,
                "name" => 'Claude 3.0 Haiku',
                "provider" => 'Anthropic',
                "description" => null,
                "input_token_cost_per_million" => 0.25,
                "output_token_cost_per_million" => 1.25,
            ],
            [
                "slug" => self::CLAUDE_3_SONNET,
                "name" => 'Claude 3.0 Sonnet',
                "provider" => 'Anthropic',
                "description" => null,
                "input_token_cost_per_million" => 3,
                "output_token_cost_per_million" => 15,
            ],
            [
                "slug" => self::CLAUDE_3_OPUS,
                "name" => 'Claude 3.0 Opus',
                "provider" => 'Anthropic',
                "description" => null,
                "input_token_cost_per_million" => 15,
                "output_token_cost_per_million" => 75,
            ],
            [
                "slug" => self::GPT_4O_MINI,
                "name" => 'GPT-4o mini',
                "provider" => 'OpenAI',
                "description" => null,
                "input_token_cost_per_million" => 0.15,
                "output_token_cost_per_million" => 0.6,
            ],
            [
                "slug" => self::GPT_4_TURBO,
                "name" => 'GPT-4 turbo',
                "provider" => 'OpenAI',
                "description" => null,
                "input_token_cost_per_million" => 10,
                "output_token_cost_per_million" => 30,
            ],
            [
                "slug" => self::GPT_4O,
                "name" => 'GPT-4o',
                "provider" => 'OpenAI',
                "description" => null,
                "input_token_cost_per_million" => 5,
                "output_token_cost_per_million" => 15,
            ],
            [
                "slug" => self::META_LLAMA_3_8B_INSTRUCT,
                "name" => 'Meta Llama 3.8B Instruct',
                "provider" => 'Replicate',
                "description" => null,
                "input_token_cost_per_million" => 0.05,
                "output_token_cost_per_million" => 0.25,
            ],
            [
                "slug" => self::MISTRAL_7B_INSTRUCT_V_0_2,
                "name" => 'Mistral 7B Instruct v0.2',
                "provider" => 'Replicate',
                "description" => null,
                "input_token_cost_per_million" => 0.05,
                "output_token_cost_per_million" => 0.25,
            ],
            [
                "slug" => self::LLAMA3_1_70B,
                "name" => 'Llama 3.1 70B',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            [
                "slug" => self::LLAMA3_2_1B,
                "name" => 'Llama 3.2 1B',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            [
                "slug" => self::LLAMA3_2_3B,
                "name" => 'Llama 3.2 3B',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            [
                "slug" => self::LLAMA3_2_3B_INSTRUCT_Q80,
                "name" => 'Llama 3.2 3B Instruct Q80',
                "provider" => 'Ollama',
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
        ];
    }
}
