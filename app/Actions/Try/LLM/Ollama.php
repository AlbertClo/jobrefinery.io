<?php

namespace App\Actions\Try\LLM;

use App\Models\SeedableEnums\LLMEnum;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class Ollama
{
    use AsAction;

    /**
     * @throws ConnectionException
     */
    public function handle(string $prompt, bool $terse): object
    {
        $ollama = new \App\Services\LLM\Ollama();
        return $ollama->prompt(LLMEnum::LLAMA3_2_3B_INSTRUCT_Q80->value, $prompt . ($terse ? '. Be terse.' : ''));
    }

    public string $commandSignature = 'try:llm:ollama {prompt : e.g. What is the capital of France?} {--terse : Be terse}';
    public string $commandDescription = 'Asks Anthropic to generate a response';
    public string $commandHelp = 'This command asks Anthropic to generate a response';
    public bool $commandHidden = false;

    /**
     * @throws ConnectionException
     */
    public function asCommand(Command $command): void
    {
        $llmResponse = $this->handle($command->argument('prompt'), $command->option('terse', false));

        $llmResponse->consoleSummary($command);
    }
}
