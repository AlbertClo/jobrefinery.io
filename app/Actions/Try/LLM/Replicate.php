<?php

namespace App\Actions\Try\LLM;

use App\Models\StaticData\LLMData;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class Replicate
{
    use AsAction;

    public function handle(string $prompt, bool $terse): object
    {
        $anthropic = new \App\Services\LLM\Replicate();
        return $anthropic->prompt(LLMData::META_LLAMA_3_8B_INSTRUCT, $prompt . ($terse ? '. Be terse.' : ''));
    }

    public string $commandSignature = 'try:llm:replicate {prompt : e.g. What is the capital of France?} {--terse : Be terse}';
    public string $commandDescription = 'Asks Anthropic to generate a response';
    public string $commandHelp = 'This command asks Anthropic to generate a response';
    public bool $commandHidden = false;

    public function asCommand(Command $command): void
    {
        $llmResponse = $this->handle($command->argument('prompt'), $command->option('terse', false));

        $llmResponse->consoleSummary($command);
    }
}
