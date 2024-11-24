<?php

namespace App\Actions\Jobs;

use App\Actions\Questions\Ask;
use App\Models\LLM;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\StaticData\LLMData;
use App\Models\StaticData\QuestionData;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class AskAllQuestions
{
    use AsAction;

    public function handle(RawJob $rawJob): void
    {
        $question = Question::where('id', QuestionData::LIST_ROLES)->first();

        $llm = LLM::where('slug', LLMData::LLAMA3_2_3B_INSTRUCT_Q80)->first();
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');

        $llm = LLM::where('slug', LLMData::LLAMA3_1_70B)->first();
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
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
