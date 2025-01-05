<?php

namespace App\Models\SeedableEnums;

use App\Enums\LLMProviderEnum;
use App\Models\SeedableEnums\Contracts\SeedableEnum;
use App\Models\SeedableEnums\Traits\SeedableEnumTrait;
use App\Models\LLM;

enum LLMEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    // OpenAI
    case CLAUDE_3_HAIKU = "claude-3-haiku-20240307";
    case CLAUDE_3_SONNET = "claude-3-5-sonnet-20240620";
    case CLAUDE_3_OPUS = "claude-3-opus-20240229";

    // Anthropic
    case GPT_4O_MINI = "gpt-4o-mini";
    case GPT_4_TURBO = "gpt-4-turbo";
    case GPT_4O = "gpt-4o";

    // Hugging Face
    case HF_GEMMA2_27B = "google/gemma-2-27b-it";
    case HF_LLAMA3_2_3B_INSTRUCT = "meta-llama/Llama-3.2-3B-Instruct";

    // Ollama
    case LLAMA3_1_70B = "llama3.1:70b";
    case LLAMA3_2_1B = "llama3.2:1b";
    case LLAMA3_2_3B = "llama3.2:3b"; // best
    case LLAMA3_2_3B_INSTRUCT_Q80 = "llama3.2:3b-instruct-q8_0";
    case LLAMA3_3_70B = "llama3.3"; // very slow
    case MIXTRAL_8X7B = "mixtral:8x7b"; // quite slow
    case PHI3_MINI = "phi3:mini"; // quite dumb
    case GEMMA_2B = "gemma:2b"; // ok
    case QWEN_4B = "qwen:4b"; // doesn't understand to answer in JSON
    case GEMMA2_2B = "gemma2:2b"; // good and light on VRAM usage
    case GEMMA2_9B = "gemma2:9b";
    case GEMMA2_27B = "gemma2:27b";
    case SOLAR_PRO = "solar-pro";
    case FALCON_40B = "falcon:40b";
    case NEZAHATKORKMAZ_DEEPSEEK_V3 = "nezahatkorkmaz/deepseek-v3";

    public static function getModelClass(): string
    {
        return LLM::class;
    }

    public function getData(): array
    {
        return match ($this) {
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
            self::HF_GEMMA2_27B => [
                "slug" => $this->value,
                "name" => 'Hugging Face Gemma 2.7B',
                "provider" => LLMProviderEnum::HUGGING_FACE,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::HF_LLAMA3_2_3B_INSTRUCT => [
                "slug" => $this->value,
                "name" => 'Hugging Face Llama 3.2 3B Instruct',
                "provider" => LLMProviderEnum::HUGGING_FACE,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
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
            self::MIXTRAL_8X7B => [
                "slug" => $this->value,
                "name" => 'Mixtral 8x7b',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::LLAMA3_3_70B => [
                "slug" => $this->value,
                "name" => 'Llama 3.3 70B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::PHI3_MINI => [
                "slug" => $this->value,
                "name" => 'Phi-3 Mini',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::GEMMA_2B => [
                "slug" => $this->value,
                "name" => 'Gemma 2B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::QWEN_4B => [
                "slug" => $this->value,
                "name" => 'Qwen 4B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::GEMMA2_2B => [
                "slug" => $this->value,
                "name" => 'Gemma 2 2B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::GEMMA2_9B => [
                "slug" => $this->value,
                "name" => 'Gemma 2 9B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::GEMMA2_27B => [
                "slug" => $this->value,
                "name" => 'Gemma 2 27B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::SOLAR_PRO => [
                "slug" => $this->value,
                "name" => 'Solar Pro',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::FALCON_40B => [
                "slug" => $this->value,
                "name" => 'Falcon 40B',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
            self::NEZAHATKORKMAZ_DEEPSEEK_V3 => [
                "slug" => $this->value,
                "name" => 'Nezahatkorkmaz Deepseek V3',
                "provider" => LLMProviderEnum::OLLAMA,
                "description" => null,
                "input_token_cost_per_million" => 0,
                "output_token_cost_per_million" => 0,
            ],
        };
    }
}
