<?php

namespace Database\Seeders\StaticDataSeeders;

use App\Models\SeedableEnums\Contracts\SeedableEnum;
use Illuminate\Database\Seeder;

abstract class EnumSeeder extends Seeder
{
    protected string $enum;
    protected static bool $forceDelete = false;

    public function run(): void
    {
        if (!is_subclass_of($this->enum, SeedableEnum::class)) {
            throw new \InvalidArgumentException("Enum must implement SeedableEnum");
        }

        $staticData = $this->enum::getSeedData();
        $modelClass = $this->enum::getModelClass();

        $model = new $modelClass;
        $modelClass::upsert($staticData, [$model->getKeyName()]);

        $deleteQuery = $modelClass::whereNotIn($model->getKeyName(), collect($staticData)->pluck($model->getKeyName()));

        if (static::$forceDelete) {
            $deleteQuery->forceDelete();
        } else {
            $deleteQuery->delete();
        }
    }
}
