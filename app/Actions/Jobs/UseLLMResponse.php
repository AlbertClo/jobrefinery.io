<?php

namespace App\Actions\Jobs;

use App\Models\City;
use App\Models\Job;
use App\Models\LLMResponse;
use App\Models\Skill;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class UseLLMResponse
{
    use AsAction;

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function handle(LLMResponse $llmResponse): void
    {
        $responseAnswer = $this->llmJsonResponseToArray($llmResponse->response);

        $job = Job::find($llmResponse->related_entity_id);
        if ($job === null) {
            throw new Exception("Error: Could not find job with id {$llmResponse->related_entity_id}");
        }

        if ($responseAnswer['city'] !== null) {
            $city = City::where('name', $responseAnswer['city'])
                ->where('country_code', $responseAnswer['work_permit_country_code'])
                ->first();
            if ($city === null) {
                $city = new City();
                $city->name = $responseAnswer['city'];
                $city->country_code = $responseAnswer['work_permit_country_code'];
                $city->save();
            }
            $job->city_id = $city->id;
        }

        if ($responseAnswer['salary_period'] !== 'annual') {
            $responseAnswer['salary_from'] *= 12;
            $responseAnswer['salary_to'] *= 12;
        }

        $exchangeRates = [
            'USD' => 1,
            'EUR' => 1.12,
            'CAD' => 0.74,
            'AUD' => 0.69,
        ];

        $job->requires_work_permit = (bool)$responseAnswer['requires_work_permit'];
        $job->work_permit_country_code = $responseAnswer['work_permit_country_code'];
        $job->is_remote = (bool)$responseAnswer['is_remote'];
        $job->is_hybrid = (bool)$responseAnswer['is_hybrid'];
        $job->days_in_office_per_week = $responseAnswer['days_in_office_per_week'];
        $job->salary_from = $responseAnswer['salary_from'] ?? null;
        $job->salary_to = $responseAnswer['salary_to'] ?? null;
        $job->salary_currency = $responseAnswer['salary_currency'];
        $job->timezone_from = $responseAnswer['timezone_from'];
        $job->timezone_to = $responseAnswer['timezone_to'];

        if (in_array($job->salary_currency, array_keys($exchangeRates))) {
            if ($job->salary_from !== null) {
                $job->salary_in_usd_from = $job->salary_from * $exchangeRates[$job->salary_currency];
            }
            if ($job->salary_to !== null) {
                $job->salary_in_usd_to = $job->salary_to * $exchangeRates[$job->salary_currency];
            }
        }

        foreach ($responseAnswer['skills'] as $skillName) {
            $skill = Skill::where('name', $skillName)->firstOrCreate(['name' => $skillName]);
            $job->skills()->attach($skill, ['skill_importance' => 'preferred']);
        }

        $job->save();
    }

    /**
     * @throws ConnectionException
     */
    public function asJob(LLMResponse $llmResponse): void
    {
        $this->handle($llmResponse);
    }

    public string $commandSignature = 'jobs:use-llm-response {jobId?}';
    public string $commandDescription = 'Fill in the job data that we need to get from an LLM';
    public string $commandHelp = 'Fill in the job data that we need to get from an LLM';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $llmResponseId = $command->argument('llmResponseId');
        if ($llmResponseId === null) {
            $command->error('No llm response id provided');

            return $command::FAILURE;
        }
        $llmResponse = LLMResponse::findOrFail($llmResponseId);

        $this->handle($llmResponse);

        return $command::SUCCESS;
    }

    /**
     * @throws Exception
     */
    function llmJsonResponseToArray($string): array
    {
        // Remove triple quotes if present
        $string = preg_replace('/^"""|"""$/m', '', $string);

        // Remove markdown code block syntax if present
        $string = preg_replace('/^```json\s*\n|\n```$/m', '', $string);

        // Remove any leading/trailing whitespace and newlines
        $string = trim($string);

        // Parse the JSON string
        $data = json_decode($string, true);

        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Error: Unable to parse JSON string");
        }

        return $this->cleanArray($data);
    }

    // Function to recursively clean keys and values
    private function cleanArray($array): array
    {
        $result = [];
        foreach ($array as $key => $value) {
            // Remove spaces and asterisks from keys
            $cleanKey = str_replace([' ', '*'], '', $key);

            if (is_array($value)) {
                // Recursively clean nested arrays
                $result[$cleanKey] = $this->cleanArray($value);
            } elseif (is_string($value)) {
                // Remove spaces from string values
                $result[$cleanKey] = str_replace(' ', '', $value);
            } else {
                // Keep non-string values as is
                $result[$cleanKey] = $value;
            }
        }
        return $result;
    }
}
