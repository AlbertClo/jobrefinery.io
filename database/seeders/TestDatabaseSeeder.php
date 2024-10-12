<?php

namespace Database\Seeders;

use Database\Seeders\TestDataSeeders\UserSeeder;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * This seeder runs all the test data seeders.
     * Should never be run on production.
     * Should run after migrations and static data seeders.
     * Should run before tests.
     * @throws Exception
     */
    public function run(): void {
        if (app()->environment('production')) {
            throw new Exception('This seeder should never be run on production');
        }

        $this->call(UserSeeder::class);
    }
}
