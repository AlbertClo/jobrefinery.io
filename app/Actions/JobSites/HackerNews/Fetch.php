<?php

namespace App\Actions\JobSites\HackerNews;

use App\Models\CachedPage;
use App\Models\SeedableEnums\JobSiteEnum;
use App\Models\StaticData\JobSiteData;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;

class Fetch
{
    use AsAction;

    public function handle($url): void
    {
        $cachedPage = CachedPage::where('url_full', $url)->firstOrFail();

        if (!$cachedPage) {
            $response = Http::get($url);

            $parsedUrl = parse_url($url);
            parse_str($parsedUrl['query'], $queryParams);

            $cachedPage = new CachedPage();
            $cachedPage->job_site_id = JobSiteEnum::HACKER_NEWS->id();
            $cachedPage->url_full = $url;
            $cachedPage->url_origin = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
            $cachedPage->url_pathname = $parsedUrl['path'];
            $cachedPage->query_params = $queryParams;
            $cachedPage->document = $response->body();
            $cachedPage->save();
        }

        Extract::dispatch($cachedPage);
    }

    public string $commandSignature = "job-sites:hacker-news:fetch {url : e.g. https://news.ycombinator.com/item?id=40563283}";
    public string $commandDescription = 'Fetches the Hacker News "Who is hiring" page';
    public string $commandHelp = 'This command fetches and saves the Hacker News Who is hiring page';
    public bool $commandHidden = false;

    public function asCommand(Command $command): void
    {
        $url = $command->argument('url');

        $this->handle($url);
    }
}
