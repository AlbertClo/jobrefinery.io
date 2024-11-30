<?php

namespace Database\Seeders\StaticDataSeeders;

use App\Models\SeedableEnums\CountryEnum;

class CountrySeeder extends EnumSeeder
{
    protected string $enum = CountryEnum::class;
}
