<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class RoleData implements StaticDataContract
{
    public const ADMIN = "admin";
    public const ADMIN_ID = "0dad94b8-592c-42d8-8175-292bd98f541e";

    public static function getModelClass(): string
    {
        return \App\Models\Role::class;
    }

    public static function getData(): array
    {
        return [
            [
                "id" => self::ADMIN_ID,
                "slug" => self::ADMIN,
                "name" => 'Admin',
            ],
        ];
    }
}
