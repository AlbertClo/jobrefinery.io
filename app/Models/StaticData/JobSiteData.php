<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class JobSiteData implements StaticDataContract
{
    public const HACKER_NEWS = "hacker-news";
    public const HACKER_NEWS_ID = "462bb2e2-06a1-4297-a9c0-3fa4a1e4c61f";

    public static function getModelClass(): string
    {
        return \App\Models\JobSite::class;
    }

    public static function getData(): array
    {
        return [
            [
                "id" => self::HACKER_NEWS_ID,
                "slug" => self::HACKER_NEWS,
                "type" => 'job board',
                "name" => 'Hacker News',
                "url" => 'https://news.ycombinator.com/',
            ],
        ];
    }
}
