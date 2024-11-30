<?php

namespace App\Actions\Try\LLM;

use App\Models\SeedableEnums\LLMEnum;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class OpenAI
{
    use AsAction;

    /**
     * @throws ConnectionException
     */
    public function handle(string $prompt, bool $terse): object
    {
        $openAI = new \App\Services\LLM\OpenAI();
        return $openAI->prompt(LLMEnum::GPT_4O_MINI->value, $prompt . ($terse ? '. Be terse.' : ''));
    }

    public string $commandSignature = 'try:llm:openai {prompt : e.g. What is the capital of France?} {--terse : Be terse}';
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
