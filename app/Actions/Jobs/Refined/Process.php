<?php

namespace App\Actions\Jobs\Refined;

use App\Models\RawJob;
use App\Models\RefinedJob;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class Process
{
    use AsAction;

    public function handle(): void
    {
        $refinedJobs = RefinedJob::get();

        foreach ($refinedJobs as $refinedJob) {
            AskSalaryQuestion::dispatch($refinedJob);
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
