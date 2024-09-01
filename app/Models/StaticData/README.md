# Static Data

Some database tables contain static data. That is data that should not be changed by users or admins, but will rather 
be maintained by the application code, i.e. seeders.

Our static data tables are:
`currencies`, 
`countries`,
`roles`,

To add static data, we just need to two files. 

### 1. Static data class 
Must implement the `StaticDataContract` interface. That will just force the implementing class to have these 
two methods defined:
- `getModelClass()`: Returns the model class that the data is being seeded for.
- `getData()`: Returns an array of data to be seeded.

E.g.:
```php
class RoleData implements StaticDataContract
{
    public const ADMIN = "admin";
    public const ADMIN_ID = "9ad2e3f0-9a2b-4a32-872f-a97a4dcb446c";

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
