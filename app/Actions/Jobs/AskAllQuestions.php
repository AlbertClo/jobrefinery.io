<?php

namespace App\Actions\Jobs;

use App\Models\RawJob;
use App\Models\RefinedJob;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class AskAllQuestions
{
    use AsAction;

    public function handle(RefinedJob $job): void
    {

    }

    public function asJob(RefinedJob $job): void
    {
        $this->handle($job);
    }

    public string $commandSignature = 'jobs:ask-all-questions {rawJobId}';
    public string $commandDescription = 'Ask all questions to an LLM';
    public string $commandHelp = 'Ask all questions to an LLM';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $rawJobId = $command->argument('rawJobId');
        if ($rawJobId === null) {
            $command->error('No job id provided');

            return $command::FAILURE;
        }

        $rawJob = RawJob::where('id', $rawJobId)->firstOrFail();

        $this->handle($rawJob);

        return $command::SUCCESS;
    }
}
