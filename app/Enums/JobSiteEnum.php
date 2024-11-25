<?php

namespace App\Enums;

use App\Enums\Contracts\SeedableEnum;
use App\Enums\Traits\SeedableEnumTrait;
use App\Models\JobSite;

enum JobSiteEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    case HACKER_NEWS = 'hacker-news';

    public static function getModelClass(): string
    {
        return JobSite::class;
    }

    public function getData(): array
    {
        return match ($this) {
            self::HACKER_NEWS => [
                'id' => "462bb2e2-06a1-4297-a9c0-3fa4a1e4c61f",
                'slug' => self::HACKER_NEWS->value,
                'type' => 'job board',
                'name' => 'Hacker News',
                'url' => 'https://news.ycombinator.com/',
            ],
        };
    }
}
