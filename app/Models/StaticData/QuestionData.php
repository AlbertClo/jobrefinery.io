<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class QuestionData implements StaticDataContract
{
//    public const string CLAUDE_3_HAIKU = "claude-3-haiku-20240307";

    public static function getModelClass(): string
    {
        return \App\Models\LLM::class;
    }

    public static function getData(): array
    {
        return [
//            [
//                "slug" => self::CLAUDE_3_HAIKU,
//                "name" => 'Claude 3.0 Haiku',
//                "provider" => 'Anthropic',
//                "description" => null,
//                "input_token_cost_per_million" => 0.25,
//                "output_token_cost_per_million" => 1.25,
//            ]
        ];
    }
}
