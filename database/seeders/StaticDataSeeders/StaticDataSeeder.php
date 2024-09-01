<?php

namespace Database\Seeders\StaticDataSeeders;

use Illuminate\Database\Seeder;

abstract class StaticDataSeeder extends Seeder
{
    protected static $staticDataClass;
    protected static $forceDelete = false;

    public function run(): void
    {
        $staticData = static::$staticDataClass::getData();
        $modelClass = static::$staticDataClass::getModelClass();

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
