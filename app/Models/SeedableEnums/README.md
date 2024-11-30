# Seedable Enums

Some database tables contain static data. That is data that should not be changed by users or admins, but will rather 
be maintained by the application code, i.e. seeders.

Our static data tables are:
`Countries`
`Currencies`
`JobSites`
`LLMs`
`Questions`
`Roles`

We manage these tables using seedable enums. To add a new static data table, we just need to two files.

### 1. Seedable enum class
Must implement the `SeedableEnum` interface. That will force the implementing class to have these 
two methods defined:
- `getModelClass()`: Returns the model class that the data is being seeded for.
- `getData()`: Returns the data for a specific enum case.
- `getSeedData()`: Returns an array of all the enum cases that will be seeded into the database. This function is added by the trait `SeedableEnumTrait`.

E.g.:
```php
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

```

### 2. Seeder class
Must extend `StaticDataSeeder`. Inside this seeder class we only need to
specify the static data class that we want to seed. E.g.
```php
class RoleSeeder extends StaticDataSeeder
{
    protected static $staticDataClass = RoleData::class;
}
```
This is all that is needed to seed the table. The `run()` function in the `StaticDataSeeder` class will automatically 
seed the table with the data from the static data class.

Static seeders should run on each production deploy, after migrations.
