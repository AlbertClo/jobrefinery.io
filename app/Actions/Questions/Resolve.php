<?php

namespace App\Actions\Questions;

use App\Models\Answer;
use App\Models\AnswerAnalyticsSummary;
use App\Models\LLM;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\SeedableEnums\LLMEnum;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class Resolve
{
    use AsAction;

    public function handle(
        Question $question,
        array $parameters,
        Model $relatedEntity,
        string|null $consensusJobClass = null,
        int $consensusMatches = 3,
        string $llmSlug = LLMEnum::DEEPSEEK_V3->value,
    ): void {
        $answersSummary = DB::query()
            ->select([
                DB::raw('lower(answer::varchar) as answer'),
                DB::raw('count(answer) as count'),
                DB::raw('round((count(answer)::numeric / NULLIF(sum(count(answer)) over(), 0)) * 100, 2) as percentage')
            ])
            ->from('answers')
            ->where('related_entity_id', $relatedEntity->id)
            ->where('related_entity_type', get_class($relatedEntity))
            // ->where('rejected_by', null) // We can later add functionality to reject bad answers. We want to keep bad answers for training data to use later.
            ->where('question_id', $question->id)
            ->groupBy(DB::raw('lower(answer::varchar)'))
            ->orderBy('percentage', 'desc')
            ->get();

        $this->saveAnswerAnalyticsSummary($relatedEntity, $answersSummary);

        if ($answersSummary->count() > 0 && $answersSummary[0]?->count >= $consensusMatches) {
            /**
             * To get the correct casing for the answer, we need to select from the database again. Because previously,
             * we selected answers in lowercase only.
             */
            $answer = Answer::query()
                ->whereRaw("LOWER(answer::varchar) = ?", [$answersSummary[0]->answer])
                ->first();

            if ($consensusJobClass) {
                $consensusJobClass::dispatch($relatedEntity, $answer)->onQueue('default');
            }
        } else {
            $llm = LLM::where('slug', $llmSlug)->first();

            Ask::run(
                $llm,
                $relatedEntity,
                $question,
                $parameters
            );

            Resolve::dispatch(
                $question,
                $parameters,
                $relatedEntity,
                $consensusJobClass,
                $consensusMatches,
                $llmSlug,
            )->onQueue('prompt-llm');
        }
    }

    public function asJob(
        Question $question,
        array $parameters,
        Model $relatedEntity,
        string|null $consensusJobClass = null,
        int $consensusMatches = 3,
        string $llmSlug = LLMEnum::NOVA_LITE->value,
    ): void {
        $this->handle(
            $question,
            $parameters,
            $relatedEntity,
            $consensusJobClass,
            $consensusMatches,
            $llmSlug,
        );
    }

    // todo: should this code be moved somewhere else?
    private function saveAnswerAnalyticsSummary(Model $relatedEntity, $answersSummary): void
    {
        $answerAnalyticsSummary = AnswerAnalyticsSummary::query()
            ->where('related_entity_id', $relatedEntity->id)
            ->where('related_entity_type', RawJob::class)
            ->where('question_id', QuestionEnum::LIST_ROLES->getData()['id'])
            ->first();

        if ($answerAnalyticsSummary === null) {
            $answerAnalyticsSummary = new AnswerAnalyticsSummary();
            $answerAnalyticsSummary->related_entity_id = $relatedEntity->id;
            $answerAnalyticsSummary->related_entity_type = RawJob::class;
            $answerAnalyticsSummary->question_id = QuestionEnum::LIST_ROLES->getData()['id'];
        }

        /**
         * Reset all values so that we don't have left over data when we run this command multiple times.
         */
        $answerAnalyticsSummary->answer_1 = null;
        $answerAnalyticsSummary->answer_1_count = null;
        $answerAnalyticsSummary->answer_1_percentage = null;
        $answerAnalyticsSummary->answer_2 = null;
        $answerAnalyticsSummary->answer_2_count = null;
        $answerAnalyticsSummary->answer_2_percentage = null;
        $answerAnalyticsSummary->answer_3 = null;
        $answerAnalyticsSummary->answer_3_count = null;
        $answerAnalyticsSummary->answer_3_percentage = null;

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
}
