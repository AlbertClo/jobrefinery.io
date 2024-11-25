<?php

namespace App\Enums;

use App\Enums\Contracts\SeedableEnum;
use App\Enums\Traits\SeedableEnumTrait;

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
