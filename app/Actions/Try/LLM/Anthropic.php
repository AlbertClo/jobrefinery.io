<?php

namespace App\Actions\Try\LLM;

use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class Anthropic
{
    use AsAction;

    /**
     * @throws ConnectionException
     */
    public function handle(string $prompt): string
    {
        $anthropic = new \App\Services\LLM\Anthropic();
        return $anthropic->promptHaiku($prompt);
    }

    public string $commandSignature = 'try:llm:anthropic {prompt : e.g. What is the capital of France?}';
    public string $commandDescription = 'Asks Anthropic to generate a response';
    public string $commandHelp = 'This command asks Anthropic to generate a response';
    public bool $commandHidden = false;

    public function asCommand(Command $command): void
    {
        $response = $this->handle($command->argument('prompt'));

        $command->info(json_decode($response)->content[0]->text);
        $command->info('Token cost: ' .json_decode($response)->usage->input_tokens + json_decode($response)->usage->output_tokens);
    }
}
