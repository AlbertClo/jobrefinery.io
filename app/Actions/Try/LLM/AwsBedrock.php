<?php

namespace App\Actions\Try\LLM;

use App\Models\SeedableEnums\LLMEnum;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class AwsBedrock
{
    use AsAction;

    public function handle(string $prompt, bool $terse): object
    {
        $deepSeek = new \App\Services\LLM\Providers\AwsBedrock();
        return $deepSeek->prompt(LLMEnum::NOVA_LITE->value, $prompt . ($terse ? '. Be terse.' : ''));
    }

    public string $commandSignature = 'try:llm:bedrock {prompt : e.g. What is the capital of France?} {--terse : Be terse}';
    public string $commandDescription = 'Asks an AWS Bedrock model to generate a response';
    public string $commandHelp = 'This command asks an AWS Bedrock model to generate a response';
    public bool $commandHidden = false;

    public function asCommand(Command $command): void
    {
        $llmResponse = $this->handle($command->argument('prompt'), $command->option('terse', false));

        $llmResponse->consoleSummary($command);
    }
}
