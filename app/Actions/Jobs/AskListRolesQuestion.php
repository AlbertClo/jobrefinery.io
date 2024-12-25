<?php

namespace App\Actions\Jobs;

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

        $llm = LLM::where('slug', LLMEnum::GEMMA2_2B->value)->first();
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
        Ask::dispatch($llm, $rawJob, $question)->onQueue('prompt-llm');
    }

    public function asJob(RawJob $rawJob): void
    {
        $this->handle($rawJob);
    }

    public string $commandSignature = 'jobs:ask-list-roles-question {rawJobId}';
    public string $commandDescription = 'Ask various LLMs to list the roles in a raw job specification';
    public string $commandHelp = 'Ask various LLMs to list the roles in a raw job specification';
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
