<?php

namespace Database\Seeders\StaticDataSeeders;

use App\Models\SeedableEnums\QuestionEnum;

class QuestionSeeder extends EnumSeeder
{
    protected string $enum = QuestionEnum::class;
}
