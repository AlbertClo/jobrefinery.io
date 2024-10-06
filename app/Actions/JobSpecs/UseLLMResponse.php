<?php

namespace App\Actions\JobSpecs;

use App\Models\City;
use App\Models\Company;
use App\Models\JobSpec;
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
        $responseAnswer = $this->llmJsonResponseToArray($llmResponse);

        $jobSpec = JobSpec::find($llmResponse->related_entity_id);
        if ($jobSpec === null) {
            throw new Exception("Error: Could not find jobSpec with id {$llmResponse->related_entity_id}");
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
            $jobSpec->city_id = $city->id;
        }

        if ($responseAnswer['company'] !== null) {
            $company = Company::where('name', $responseAnswer['company'])
                ->first();
            if ($company === null) {
                $company = new Company();
                $company->name = $responseAnswer['company'];
                $company->save();
            }
            $jobSpec->company_id = $company->id;
        }

        if ($responseAnswer['salary_period'] !== 'annual') {
            $responseAnswer['salary_from'] *= 12;
            $responseAnswer['salary_to'] *= 12;
        }

        $exchangeRatesFromUSD = [
            'GBP' => 1.33,
            'EUR' => 1.11,
            'USD' => 1,
            'CAD' => 0.74,
            'AUD' => 0.69,
        ];

        $jobSpec->heading = $responseAnswer['heading'];
        $jobSpec->requires_work_permit = (bool)$responseAnswer['requires_work_permit'];
        $jobSpec->work_permit_country_code = $responseAnswer['work_permit_country_code'];
        $jobSpec->is_remote = (bool)$responseAnswer['is_remote'];
        $jobSpec->is_hybrid = (bool)$responseAnswer['is_hybrid'];
        $jobSpec->days_in_office_per_week = $responseAnswer['days_in_office_per_week'];
        $jobSpec->salary_from = $responseAnswer['salary_from'] ?? null;
        $jobSpec->salary_to = $responseAnswer['salary_to'] ?? null;
        $jobSpec->salary_currency = $responseAnswer['salary_currency'];
        $jobSpec->timezone_from = $responseAnswer['timezone_from'];
        $jobSpec->timezone_to = $responseAnswer['timezone_to'];

        if (in_array($jobSpec->salary_currency, array_keys($exchangeRatesFromUSD))) {
            if ($jobSpec->salary_from !== null) {
                $jobSpec->salary_in_usd_from = $jobSpec->salary_from * $exchangeRatesFromUSD[$jobSpec->salary_currency];
            }
            if ($jobSpec->salary_to !== null) {
                $jobSpec->salary_in_usd_to = $jobSpec->salary_to * $exchangeRatesFromUSD[$jobSpec->salary_currency];
            }
        }

        $jobSpec->skills()->detach(); // detach existing skills, if any
        if (is_array($responseAnswer['skills'])) {
            foreach ($responseAnswer['skills'] as $skillName) {
                $skill = Skill::where('name', $skillName)->firstOrCreate(['name' => $skillName]);
                $jobSpec->skills()->attach($skill, ['skill_importance' => 'preferred']);
            }
        }

        $jobSpec->save();
    }

    /**
     * @throws ConnectionException
     */
    public function asJob(LLMResponse $llmResponse): void
    {
        $this->handle($llmResponse);
    }

    public string $commandSignature = 'job-specs:use-llm-response {jobSpecId?}';
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
    function llmJsonResponseToArray(LLMResponse $llmResponse): array
    {
        $response = $llmResponse->response;
        $start = strpos($response, '{');
        $end = strrpos($response, '}');

        if ($start === false || $end === false) {
            throw new Exception("Error: Unable to find JSON in response");
        }

        $json = substr($response, $start, $end - $start + 1);
        $responseArray = json_decode($json, true);
        if ($responseArray === null && json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Error: Unable to parse JSON string" . json_last_error_msg());
        }

        // If it's Replicate we need to try to remove unnecessary spaces inside the response as well.
        if (strtolower($llmResponse->relatedLLM->provider) === 'replicate') {
            $response = $this->cleanArray($responseArray);
        }

        return $responseArray;
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
                // Don't remove spaces from these values, only trim
                if (in_array(strtolower($cleanKey), ['heading', 'city', 'company'])) {
                    $result[$cleanKey] = trim($value);
                } else {
                    // Remove spaces from string values for other keys
                    $result[$cleanKey] = str_replace(' ', '', $value);
                }
            } else {
                // Keep non-string values as is
                $result[$cleanKey] = $value;
            }
        }
        return $result;
    }
}
