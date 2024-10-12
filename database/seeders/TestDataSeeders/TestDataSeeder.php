<?php

namespace Database\Seeders\TestDataSeeders;

use App\Models\User;
use Illuminate\Database\Seeder;

abstract class TestDataSeeder extends Seeder
{
    public function run(): void
    {
        $data = static::getData();
        $keyName = (new static::$modelClass)->getKeyName();

        [$data, $enrichFunctions] = $this->extractEnrichFunctions($data, $keyName);

        static::$modelClass::upsert($data, [$keyName]);

        // If you want to do extra processing with all the created entities, you can override the `enrichEntities`
        // method in the extending class. E.g. for if you want to add roles to created users.
        // This will run on all created entities.
        if (method_exists(static::class, 'enrichEntities')) {
            $createdEntities = static::$modelClass::whereIn($keyName, collect($data)->pluck($keyName))->get();
            static::enrichEntities($createdEntities);
        }

        // If you want to do extra processing with individual entities, you can add a 'enrichFunction' key to the data
        // with the value being a closure that takes the entity as an argument. This way you could for instance add
        // different roles to different users, instead of applying the same role to all users.
        foreach ($enrichFunctions as $enrichFunction) {
            $model = static::$modelClass::where($keyName, $enrichFunction[0])->first();
            $enrichFunction[1]($model);
        }
    }

    private static function extractEnrichFunctions(array $data, string $keyName): array
    {
        $enrichFunctions = [];

        foreach ($data as $key => $value) {
            if (is_array($value) && array_key_exists('enrichFunction', $value)) {
                $enrichFunctions[] = [$value[$keyName], $value['enrichFunction']];
                unset($data[$key]['enrichFunction']);
            }
        }

        return [$data, $enrichFunctions];
    }
}
