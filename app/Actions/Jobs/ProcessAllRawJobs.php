<?php

namespace App\Actions\Jobs;

use App\Models\RawJob;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class ProcessAllRawJobs
{
    use AsAction;

    public function handle(): void
    {
        /**
         * Later we will select only raw jobs that haven't been processed yet.
         */
        $rawJobs = RawJob::whereHas('answers')->get();

        foreach ($rawJobs as $rawJob) {
            CreateRefinedJobsFromRoles::dispatch($rawJob);
        }
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
    }

    public string $commandSignature = 'jobs:process-all-raw-jobs';
    public string $commandDescription = 'Create refined jobs for all unprocessed raw jobs';
    public string $commandHelp = 'Create refined jobs for all unprocessed raw jobs';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $this->handle();

        return $command::SUCCESS;
    }
}
