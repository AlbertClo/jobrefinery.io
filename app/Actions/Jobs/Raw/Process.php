<?php

namespace App\Actions\Jobs\Raw;

use App\Actions\Questions\Resolve;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\QuestionEnum;
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
        //$unprocessedRawJobs = RawJob::whereHas('answers')->get();
        $unprocessedRawJobs = RawJob::whereId('answers')->get();

        foreach ($unprocessedRawJobs as $rawJob) {
            //CreateRefinedJobs::dispatch($rawJob);

            Resolve::dispatch(
                Question::where('id', QuestionEnum::LIST_ROLES->value)->first(),
                [
                    "jobDescription" => $rawJob->original_description_text,
                ],
                $rawJob,
                '\App\Jobs\TestJob',
//                function ($relatedEntity, $answer) {
//                    foreach ($answer as $role) {
//                        $refinedJob = RefinedJob::query()
//                            ->where('raw_job_id', $relatedEntity->id)
//                            ->where('heading', $role)
//                            ->first();
//                        if ($refinedJob === null) {
//                            $refinedJob = new RefinedJob();
//                            $refinedJob->raw_job_id = $relatedEntity->id;
//                            $refinedJob->cached_page_id = $relatedEntity->cached_page_id;
//                            $refinedJob->job_site_id = $relatedEntity->job_site_id;
//                            $refinedJob->heading = $role;
//                        }
//                        $refinedJob->save();
//                    }
//                }
            )->onQueue('prompt-llm');
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
