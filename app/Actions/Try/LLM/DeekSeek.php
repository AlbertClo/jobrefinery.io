<?php

namespace App\Actions\Try\LLM;

use App\Models\SeedableEnums\LLMEnum;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class DeekSeek
{
    use AsAction;

    /**
     * @throws ConnectionException
     */
    public function handle(string $prompt, bool $terse): object
    {
        $deepSeek = new \App\Services\LLM\Providers\DeepSeek();
        return $deepSeek->prompt(LLMEnum::DEEPSEEK_V3->value, $prompt . ($terse ? '. Be terse.' : ''));
    }

    public string $commandSignature = 'try:llm:deepseek {prompt : e.g. What is the capital of France?} {--terse : Be terse}';
    public string $commandDescription = 'Asks DeepSeek to generate a response';
    public string $commandHelp = 'This command asks DeepSeek to generate a response';
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
