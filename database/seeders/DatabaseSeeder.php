<?php

namespace Database\Seeders;

use Database\Seeders\StaticDataSeeders\CountrySeeder;
use Database\Seeders\StaticDataSeeders\CurrencySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call(CurrencySeeder::class);
        $this->call(CountrySeeder::class);
    }
}
