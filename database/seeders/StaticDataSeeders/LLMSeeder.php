<?php

namespace Database\Seeders\StaticDataSeeders;

use App\Models\SeedableEnums\LLMEnum;

class LLMSeeder extends EnumSeeder
{
    protected string $enum = LLMEnum::class;
}
