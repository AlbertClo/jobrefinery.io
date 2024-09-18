<?php

namespace App\Actions\Try\Bugsnag;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use Exception;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class Notify
{
    use AsAction;

    /**
     * @throws Exception
     */
    public function handle()
    {
        Bugsnag::notifyError('Test', 'Test Bugsnag notification');
    }

    public string $commandSignature = 'try:bugsnag:notify';
    public string $commandDescription = 'Sends a test Bugsnag notification';
    public string $commandHelp = 'This command sends a test Bugsnag notification';
    public bool $commandHidden = false;

    /**
     * @throws Exception
     */
    public function asCommand(Command $command): void
    {
        $this->handle();
    }
}
