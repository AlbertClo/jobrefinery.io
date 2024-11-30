<?php

namespace Database\Seeders\StaticDataSeeders;

use App\Models\SeedableEnums\CurrencyEnum;

class CurrencySeeder extends EnumSeeder
{
    protected string $enum = CurrencyEnum::class;
}
