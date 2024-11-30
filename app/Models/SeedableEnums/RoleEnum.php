<?php

namespace App\Models\SeedableEnums;

use App\Models\SeedableEnums\Contracts\SeedableEnum;
use App\Models\SeedableEnums\Traits\SeedableEnumTrait;

enum RoleEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    case ADMIN = 'admin';

    public static function getModelClass(): string
    {
        return \App\Models\Role::class;
    }

    public function getData(): array
    {
        return match($this) {
            self::ADMIN => [
                'id' => '0dad94b8-592c-42d8-8175-292bd98f541e',
                'slug' => $this->value,
                'name' => 'Admin',
            ],
        };
    }

    public function getId(): string
    {
        return $this->getData()['id'];
    }
}
