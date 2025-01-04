<?php

namespace App\Actions\Jobs\Raw;

use App\Models\RawJob;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class Process
{
    use AsAction;

    public function handle(): void
    {
        $unprocessedRawJobs = RawJob::whereHas('answers')->get();

        foreach ($unprocessedRawJobs as $rawJob) {
            CreateRefinedJobs::dispatch($rawJob);
        }
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
    }

    public string $commandSignature = 'jobs:raw:process';
    public string $commandDescription = 'Create refined jobs for all unprocessed raw jobs';
    public string $commandHelp = 'Create refined jobs for all unprocessed raw jobs';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $this->handle();

        return $command::SUCCESS;
    }
}
