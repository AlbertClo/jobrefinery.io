<?php

namespace App\Actions\JobSites\HackerNews;

use App\Actions\Jobs\Raw\CreateRefinedJobs;
use App\Actions\Questions\Resolve;
use App\Models\CachedPage;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\SeedableEnums\JobSiteEnum;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;
use Symfony\Component\DomCrawler\Crawler;

class Extract
{
    use AsAction;

    public function handle(CachedPage $cachedPage): void
    {
        $crawler = new Crawler($cachedPage->document);

        $jobPosts = $crawler->filter('table.fatitem + br + br + table.comment-tree > tr.athing.comtr')
            ->reduce(function (Crawler $node) {
                // Only keep the top level comments
                // indent will be greater than 0 if the comment is a reply
                return $node->filter('td.ind')->attr('indent') === '0';
            })
            ->each(function (Crawler $node) use ($cachedPage) {
                // Get the comment text
                $comment = $node->filter('div.commtext');
                if ($comment->count() === 0) {
                    return null;
                }

                // Get the direct link to the post
                $directLinkElement = $node->filter('span.age > a');
                $directLink = $directLinkElement->count() > 0 ? $directLinkElement->attr('href') : null;

                // Get the post timestamp
                $ageElement = $node->filter('span.age');
                $timestamp = $ageElement->count() > 0 ? $ageElement->attr('title') : null;
                $timestamp = explode(' ', $timestamp)[0];

                return [
                    'cached_page_id' => $cachedPage->id,
                    'job_site_id' => JobSiteEnum::HACKER_NEWS->id(),
                    'original_url' => $cachedPage->url_full,
                    'direct_link' => $directLink,
                    'post_date' => $timestamp,
                    'original_description_text' => $this->getFormattedText($comment),
                    'original_description_html' => $comment->html(),
                ];
            });

        // Remove null entries and reindex array
        $jobPosts = array_values(array_filter($jobPosts));

        foreach ($jobPosts as $jobPost) {
            $rawJob = RawJob::where('direct_link', $jobPost['direct_link'])->first();
            if ($rawJob === null) {
                $rawJob = RawJob::create($jobPost);
            } else {
                $rawJob->update($jobPost);
            }

            Resolve::dispatch(
                question: Question::where('id', QuestionEnum::LIST_ROLES->value)->first(),
                parameters: ["jobDescription" => $rawJob->original_description_text], //todo can we move parameters somewhere else so we need to pass fewer args to Resolve?
                relatedEntity: $rawJob,
                next: CreateRefinedJobs::class,
            )->onQueue('prompt-llm');
        }
    }

    public function asJob(CachedPage $cachedPage): void
    {
        $this->handle($cachedPage);
    }

    public string $commandSignature = 'job-sites:hacker-news:extract {cachedPageId?}';
    public string $commandDescription = 'Extracts jobs from the cached "Hacker News Who is hiring" page';
    public string $commandHelp = 'This command extracts jobs from the cached "Hacker News Who is hiring" page';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $cachedPageId = $command->argument('cachedPageId');
        if ($cachedPageId === null) {
            $cachedPage = CachedPage::where('job_site_id', JobSiteEnum::HACKER_NEWS->id())
                ->orderBy('created_at', 'desc')
                ->first();
        } else {
            $cachedPage = CachedPage::findOrFail($cachedPageId);
        }

        if ($cachedPage === null) {
            $command->error('No cached page found for "Hacker News Who is hiring"');

            return $command::FAILURE;
        }

        $this->handle($cachedPage);

        return $command::SUCCESS;
    }

    private function getFormattedText(Crawler $node): string
    {
        $html = $node->html();

        // Replace block elements with newlines
        $html = str_replace(
            ['</p>', '</div>', '</br>', '<br>', '<br/>', '</h1>', '</h2>', '</h3>', '</h4>', '</h5>', '</h6>'],
            "\n\n",
            $html
        );
        $html = str_replace(['<p>', '<div>', '<br>', '<br>', '<br/>', '<h1>', '<h2>', '<h3>', '<h4>', '<h5>', '<h6>'],
            "\n\n",
            $html);

        // Strip all HTML tags
        $text = strip_tags($html);

        // Clean up excessive whitespace and newlines
        $text = preg_replace('/\n\s+\n/', "\n\n", $text);
        $text = preg_replace('/[\n]{3,}/', "\n\n", $text);

        return trim($text);
    }
}
