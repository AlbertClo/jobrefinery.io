<?php

namespace App\Actions\Try\LLM;

use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class Replicate
{
    use AsAction;

    /**
     * @throws ConnectionException
     */
    public function handle(string $prompt, bool $terse): object
    {
        $anthropic = new \App\Services\LLM\Replicate();
        return $anthropic->promptMetaLlama38bInstruct($prompt . ($terse ? '. Be terse.' : ''));
    }

    public string $commandSignature = 'try:llm:replicate {prompt : e.g. What is the capital of France?} {--terse : Be terse}';
    public string $commandDescription = 'Asks Anthropic to generate a response';
    public string $commandHelp = 'This command asks Anthropic to generate a response';
    public bool $commandHidden = false;

    /**
     * @throws ConnectionException
     */
    public function asCommand(Command $command): void
    {
        $response = $this->handle($command->argument('prompt'), $command->option('terse', false));

//        $command->info($response->answer);
//        $command->info('Input tokens: ' .$response->token_cost->input_tokens);
//        $command->info('Output tokens: ' .$response->token_cost->output_tokens);
    }
}
