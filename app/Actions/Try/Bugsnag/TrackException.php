<?php

namespace App\Actions\Try\Bugsnag;

use Exception;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class TrackException
{
    use AsAction;

    /**
     * @throws Exception
     */
    public function handle()
    {
        throw new Exception('This is a test exception');
    }

    public string $commandSignature = 'try:bugsnag:track-exception';
    public string $commandDescription = 'Throw an exception to test Bugsnag';
    public string $commandHelp = 'This command throws an exception to test Bugsnag';
    public bool $commandHidden = false;

    /**
     * @throws Exception
     */
    public function asCommand(Command $command): void
    {
        $this->handle();
    }
}
