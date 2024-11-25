<?php

namespace App\Enums\Traits;

trait SeedableEnumTrait
{
    public static function getSeedData(): array
    {
        return array_map(
            fn(self $case) => $case->getData(),
            self::cases()
        );
    }
}
