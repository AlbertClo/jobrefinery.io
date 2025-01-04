<?php

namespace App\Actions\Jobs\Refined;

use App\Actions\Questions\Ask;
use App\Models\LLM;
use App\Models\Question;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\LLMEnum;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class AskSalaryQuestion
{
    use AsAction;

    public function handle(RefinedJob $refinedJob): void
    {
        $question = Question::where('id', QuestionEnum::DETERMINE_SALARY->value)->first();

        $llm = LLM::where('slug', LLMEnum::GEMMA2_27B->value)->first();

        $rawJob = $refinedJob->rawJob;
        $otherRolesFromRawJob = $rawJob->refinedJobs;
        $extractedRoles = $otherRolesFromRawJob->pluck('heading')->toArray();
        $parameters = [
            "rawJobDescription" => $rawJob->original_description_text,
            "extractedRoles" => implode(', ', $extractedRoles),
            "refinedJobHeading" => $refinedJob->heading,
        ];

        $numberOfAsks = 5;
        for ($i = 0; $i < $numberOfAsks; $i++) {
            Ask::dispatch(
                $llm,
                $refinedJob,
                $question,
                $parameters,
            )->onQueue('prompt-llm');
        }
    }

    public function asJob(RefinedJob $refinedJob): void
    {
        $this->handle($refinedJob);
    }

    public string $commandSignature = 'jobs:refined:ask-salary-question {refinedJobId}';
    public string $commandDescription = 'Ask LLM to determine the salary range for a refined job';
    public string $commandHelp = 'Ask LLM to determine the salary range for a refined job';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $refinedJobId = $command->argument('refinedJobId');
        if ($refinedJobId === null) {
            $command->error('No job id provided');

            return $command::FAILURE;
        }

        $refinedJob = RefinedJob::where('id', $refinedJobId)->firstOrFail();

        $this->handle($refinedJob);

        return $command::SUCCESS;
    }
}
