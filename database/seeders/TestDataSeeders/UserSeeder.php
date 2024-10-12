<?php

namespace Database\Seeders\TestDataSeeders;

use App\Models\StaticData\RoleData;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends TestDataSeeder
{
    public static $modelClass = User::class;

    protected static function getData(): array
    {
        return [
            [
                "id" => '4b225ba5-1167-4221-8604-55457754b53f',
                "email" => 'albert@jobrefinery.io',
                "name" => 'Albert Clo',
                "password" => Hash::make('test1234'),
                'enrichFunction' => function (User $user) {
                    if (!$user->hasRole(RoleData::ADMIN_ID)) {
                        $user->roles()->attach(RoleData::ADMIN_ID);
                    }
                }
            ],
            [
                "id" => '3584cfe0-c626-4f35-b961-b08e7091c04c',
                "email" => 'user@test.com',
                "name" => 'User',
                "password" => Hash::make('test1234'),
            ],
        ];
    }

    protected static function enrichEntities(Collection $entities): void
    {
        $entities->each(function (User $user) {
            // Things to do with all users in the seeder
        });
    }

}
