<?php

namespace App\Actions\Jobs\Refined;

use App\Actions\Questions\Ask;
use App\Models\Answer;
use App\Models\LLM;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\LLMEnum;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

/**
 * @deprecated
 */
class AskSalaryQuestion
{
    use AsAction;

    /**
     * @throws ConnectionException
     */
    public function handle(RefinedJob $refinedJob): void
    {
        $answersSummary = DB::query()
            ->select([
                DB::raw('lower(answer::varchar) as answer'),
                DB::raw('count(answer) as count'),
                DB::raw('round((count(answer)::numeric / sum(count(answer)) over()) * 100, 2) as percentage'),
            ])
            ->from('answers')
            ->where('related_entity_id', $refinedJob->id)
            ->where('related_entity_type', RawJob::class)
            ->where('author_id', LLMEnum::GEMMA2_27B->value) // Gemma 2 27B has better answers than most other LLMs.
            ->groupBy(DB::raw('lower(answer::varchar)'))
            ->orderBy('percentage', 'desc')
            ->get();

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

        $answer = Ask::handle(
            $llm,
            $refinedJob,
            $question,
            $parameters,
        );
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

    public function resolveQuestion(
        Question $question,
        Model $relatedEntity,
        callable $onConsensusCallback,
        int $consensusMatches = 3
    ): void {
        $minimumMatches = 3;

        $answersSummary = DB::query()
            ->select([
                DB::raw('lower(answer::varchar) as answer'),
                DB::raw('count(answer) as count'),
                DB::raw('round((count(answer)::numeric / sum(count(answer)) over()) * 100, 2) as percentage'),
            ])
            ->from('answers')
            ->where('related_entity_id', $relatedEntity->id)
            ->where('related_entity_type', RawJob::class)
            ->where('author_id', LLMEnum::GEMMA2_27B->value) // Gemma 2 27B has better answers than most other LLMs.
            ->where('question_id', QuestionEnum::DETERMINE_SALARY->value)
            ->groupBy(DB::raw('lower(answer::varchar)'))
            ->orderBy('percentage', 'desc')
            ->get();

        if ($answersSummary[0]->count > $this->$minimumMatches) {
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
}
