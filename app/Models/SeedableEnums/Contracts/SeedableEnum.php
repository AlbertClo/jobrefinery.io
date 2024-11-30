<?php

namespace App\Models\SeedableEnums\Contracts;

interface SeedableEnum
{
    public static function getModelClass(): string;
    public function getData(): array;
    public static function getSeedData(): array;
}
