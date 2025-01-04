<?php

namespace App\Actions\Jobs\Raw;

use App\Actions\Questions\Ask;
use App\Models\LLM;
use App\Models\Question;
use App\Models\RawJob;
use App\Models\SeedableEnums\LLMEnum;
use App\Models\SeedableEnums\QuestionEnum;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class AskListRolesQuestion
{
    use AsAction;

    public function handle(RawJob $rawJob): void
    {
        $question = Question::where('id', QuestionEnum::LIST_ROLES->value)->first();

        $llm = LLM::where('slug', LLMEnum::GEMMA2_27B->value)->first();

        $parameters = [
            "jobDescription" => $rawJob->original_description_text,
        ];

        $numberOfAsks = 9;
        for ($i = 0; $i < $numberOfAsks; $i++) {
            Ask::dispatch(
                $llm,
                $rawJob,
                $question,
                $parameters,
            )->onQueue('prompt-llm');
        }
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
    }

    public string $commandSignature = 'jobs:raw:ask-roles-question {rawJobId}';
    public string $commandDescription = 'Ask LLM to list the roles in a raw job specification';
    public string $commandHelp = 'Ask LLM to list the roles in a raw job specification';
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
