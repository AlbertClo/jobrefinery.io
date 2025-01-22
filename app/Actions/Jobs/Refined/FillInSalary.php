<?php

namespace App\Actions\Jobs\Refined;

use App\Enums\SalaryPeriodEnum;
use App\Models\Answer;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\CurrencyEnum;
use Lorisleiva\Actions\Concerns\AsAction;

class FillInSalary
{
    use AsAction;

    public function handle(RefinedJob $refinedJob, Answer $answer): void
    {
        $refinedJob->salary_from = $answer->answer['salary_from'] ?? null;
        $refinedJob->salary_to = $answer->answer['salary_to'] ?? null;
        $refinedJob->salary_period = $answer->answer['salary_period'] ? SalaryPeriodEnum::from(strtolower($answer->answer['salary_period'])) : null;
        $refinedJob->salary_currency = $answer->answer['salary_currency'] ? CurrencyEnum::from(strtoupper($answer->answer['salary_currency'])) : null;
        $refinedJob->save();
    }

    public function asJob(RefinedJob $refinedJob, Answer $answer): void
    {
        $this->handle($refinedJob, $answer);
    }
}
