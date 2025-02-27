<?php

namespace App\Actions\Jobs\Raw;

use App\Actions\Jobs\Refined\FillInSalary;
use App\Actions\Questions\Resolve;
use App\Models\Answer;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateRefinedJobs
{
    use AsAction;

    public function handle(RawJob $rawJob, Answer $answer): void
    {
        foreach ($answer->answer as $role) {
            $refinedJob = RefinedJob::query()
                ->where('raw_job_id', $rawJob->id)
                ->where('heading', $role)
                ->first();

            if ($refinedJob === null) {
                $refinedJob = new RefinedJob();
                $refinedJob->raw_job_id = $rawJob->id;
                $refinedJob->cached_page_id = $rawJob->cached_page_id;
                $refinedJob->job_site_id = $rawJob->job_site_id;
                $refinedJob->description = $rawJob->original_description_text;
                $refinedJob->heading = $role;
                $refinedJob->post_date = $rawJob->post_date;
            }

            $refinedJob->save();

            Resolve::dispatch(
                question: Question::where('id', QuestionEnum::DETERMINE_SALARY->value)->first(),
                parameters: [
                    "rawJobDescription" => $rawJob->original_description_text,
                    "extractedRoles" => implode(', ', $answer->answer),
                    "refinedJobHeading" => $refinedJob->heading,
                ], //todo can we handle parameters better? I.e. could we determine the parameters automatically from inside Resolve? Maybe a function can be added onto the Question enum to determine the parameters?
                relatedEntity: $refinedJob,
                next: FillInSalary::class,
            )->onQueue('prompt-llm');
        }
    }

    public function asJob(RawJob $rawJob, Answer $answer): void
    {
        $this->handle($rawJob, $answer);
    }

    public string $commandSignature = 'jobs:raw:create-refined-jobs {rawJobId}';
    public string $commandDescription = 'Use the roles in a raw job specification to create refined jobs';
    public string $commandHelp = 'Use the roles in a raw job specification to create refined jobs';
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
