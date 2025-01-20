<?php

namespace App\Actions\Jobs\Refined;

use App\Actions\Questions\Resolve;
use App\Models\RawJob;
use App\Models\RefinedJob;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

/**
 * @deprecated
 */
class Process
{
    use AsAction;

    public function handle(): void
    {
        $refinedJobs = RefinedJob::get();

        foreach ($refinedJobs as $refinedJob) {
            AskSalaryQuestion::dispatch($refinedJob);

            Resolve::dispatch(
                $question,
                $parameters,
                $relatedEntity,
                $onConsensusCallback,
                $consensusMatches,
                $llmSlug,
            )->onQueue('prompt-llm');
        }
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
    }

    public string $commandSignature = 'jobs:refined:process';
    public string $commandDescription = 'Extract all information for all refined jobs';
    public string $commandHelp = 'Extract all information for all refined jobs';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $this->handle();

        return $command::SUCCESS;
    }
}
