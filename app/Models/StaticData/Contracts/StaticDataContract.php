<?php

namespace App\Models\StaticData\Contracts;

use Illuminate\Database\Eloquent\Model;

interface StaticDataContract
{
    /*
     * E.g. App\Models\Course::class
     */
    public static function getModelClass(): string;

    public static function getData(): array;
}