<?php

namespace App\Models\SeedableEnums\Traits;

trait SeedableEnumTrait
{
    public static function getSeedData(): array
    {
        return array_map(
            fn(self $case) => $case->getData(),
            self::cases()
        );
    }

    public function id(): string
    {
        return $this->getData()['id'];
    }
}
