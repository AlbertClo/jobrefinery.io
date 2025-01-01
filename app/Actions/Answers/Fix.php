<?php

namespace App\Actions\Answers;

use App\Models\Answer;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class Fix
{
    use AsAction;

    /**
     * We sort the answers alphabetically because we want to string compare and group by whole answers later.
     * E.g. if we have ["a", "b", "c"] and ["c", "b", "a"], we want to consider them as the same answer.
     *
     * @throws ConnectionException
     * @throws Exception
     */
    public function handle(): void
    {
        $answers = Answer::get();

        foreach ($answers as $answer) {
            $a = $answer->answer;
            if (is_array($a)) {
                sort($a);
            }
            $answer->answer = $a;
            $answer->save();
        }
    }

    public function asJob(): void
    {
        $this->handle();
    }

    public string $commandSignature = 'answers:fix';
    public string $commandDescription = 'Fix answers';
    public string $commandHelp = 'Fix answers';
    public bool $commandHidden = false;

    /**
     * @throws ConnectionException
     */
    public function asCommand(Command $command): int
    {
        $this->handle();

        return $command::SUCCESS;
    }
}
