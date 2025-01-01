<?php

namespace App\Actions\Jobs;

use App\Models\Answer;
use App\Models\AnswerAnalyticsSummary;
use App\Models\RawJob;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateRefinedJobsFromRoles
{
    use AsAction;

    /**
     * The minimum number of matching answers required to create refined jobs. Because the LLMs aren't very reliable,
     * we need a lot of matching responses to make sure there is a high likelihood correctness.
     */
    private int $minimumMatches = 5;

    /**
     * At least this percentage of the total answers must agree to be accepted as likely correct.
     */
    private int $minimumConsensusPercentage = 50;

    public function handle(RawJob $rawJob): void
    {
        /**
         * We select in lowercase, to so that answers with different casing but same text are counted as the same
         * answer. We do this to increase the consensus percentage, so that more answers are accepted automatically
         * without human input.
         */
        $answersSummary = DB::query()
            ->select([
                DB::raw('lower(answer::varchar) as answer'),
                DB::raw('count(answer) as count'),
                DB::raw('round((count(answer)::numeric / sum(count(answer)) over()) * 100, 2) as percentage'),
            ])
            ->from('answers')
            ->where('raw_job_id', $rawJob->id)
            ->groupBy(DB::raw('lower(answer::varchar)'))
            ->orderBy('percentage', 'desc')
            ->get();

        $this->saveAnswerAnalyticsSummary($rawJob, $answersSummary);

        if ($answersSummary[0]->count > $this->minimumMatches && $answersSummary[0]->percentage > $this->minimumConsensusPercentage) {
            /**
             * To get the correct casing for the answer, we need to select from the database again. Because previously,
             * we selected answers in lowercase only.
             */
            $answer = Answer::query()
                ->whereRaw("LOWER(answer::varchar) = ?", [$answersSummary[0]->answer])
                ->first();

            $this->createRefinedJobs($rawJob, $answer->answer);
        }
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
    }

    public string $commandSignature = 'jobs:create-refined-jobs-from-roles {rawJobId}';
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

    private function saveAnswerAnalyticsSummary(RawJob $rawJob, $answersSummary): void
    {
        $answerAnalyticsSummary = AnswerAnalyticsSummary::query()
            ->where('raw_job_id', $rawJob->id)
            ->where('question_id', QuestionEnum::LIST_ROLES->getData()['id'])
            ->first();

        if ($answerAnalyticsSummary === null) {
            $answerAnalyticsSummary = new AnswerAnalyticsSummary();
            $answerAnalyticsSummary->raw_job_id = $rawJob->id;
            $answerAnalyticsSummary->question_id = QuestionEnum::LIST_ROLES->getData()['id'];
        }

        if (isset($answersSummary[0]) && $answersSummary[0]?->answer) {
            $answerAnalyticsSummary->answer_1 = $answersSummary[0]->answer;
            $answerAnalyticsSummary->answer_1_count = $answersSummary[0]->count;
            $answerAnalyticsSummary->answer_1_percentage = $answersSummary[0]->percentage;
        }

        if (isset($answersSummary[1]) && $answersSummary[1]?->answer) {
            $answerAnalyticsSummary->answer_2 = $answersSummary[1]->answer;
            $answerAnalyticsSummary->answer_2_count = $answersSummary[1]->count;
            $answerAnalyticsSummary->answer_2_percentage = $answersSummary[1]->percentage;
        }

        if (isset($answersSummary[2]) && $answersSummary[2]?->answer) {
            $answerAnalyticsSummary->answer_3 = $answersSummary[2]->answer;
            $answerAnalyticsSummary->answer_3_count = $answersSummary[2]->count;
            $answerAnalyticsSummary->answer_3_percentage = $answersSummary[2]->percentage;
        }

        $answerAnalyticsSummary->data = $answersSummary;

        $answerAnalyticsSummary->save();
    }

    private function createRefinedJobs(RawJob $rawJob, $roles): void
    {
        foreach ($roles as $role) {
            $refinedJob = RefinedJob::query()
                ->where('raw_job_id', $rawJob->id)
                ->where('heading', $role)
                ->first();

            if ($refinedJob === null) {
                $refinedJob = new RefinedJob();
                $refinedJob->raw_job_id = $rawJob->id;
                $refinedJob->cached_page_id = $rawJob->cached_page_id;
                $refinedJob->job_site_id = $rawJob->job_site_id;
                $refinedJob->heading = $role;
            }

            $refinedJob->save();
        }
    }
}
