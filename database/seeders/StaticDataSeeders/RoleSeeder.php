<?php

namespace Database\Seeders\StaticDataSeeders;

use App\Models\SeedableEnums\RoleEnum;

class RoleSeeder extends EnumSeeder
{
    protected string $enum = RoleEnum::class;
}
