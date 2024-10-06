<?php

namespace App\Actions\JobSpecs;

use App\Models\JobSpec;
use App\Models\StaticData\JobSiteData;
use App\Models\StaticData\LLMData;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class PromptLLM
{
    use AsAction;

    public function handle(JobSpec $jobSpec): void
    {
        $extraPromptInfo = '';
        if ($jobSpec->job_site_id === JobSiteData::HACKER_NEWS_ID) {
            $extraPromptInfo = "This job description is from a Hacker News \"Ask HN: Who is hiring?\" Post.";
        }

        $prompt = "
            I'm going to give you a job description. I need you to extract the following info from the job description
            and return it as a JSON object.

            heading (e.g. Full Stack Developer)
            requires_work_permit (boolean)
            work_permit_country_code (ISO 3166 alpha-3 code, e.g. USA)
            city (e.g. San Francisco, New York)
            company (e.g. Google)
            is_remote (boolean)
            is_hybrid (boolean)
            days_in_office_per_week (integer, e.g. 4)
            salary_from (integer, e.g. 100000)
            salary_to (integer, e.g. 100000)
            salary_period (e.g. annual, monthly)
            salary_currency (ISO 4217 currency code, e.g. USD)
            timezone_from (IANA timezone name, e.g. America/Los_Angeles, or a UTC offset, e.g. +08:00)
            timezone_to (IANA timezone name, e.g. America/Los_Angeles, or a UTC offset, e.g. +08:00)
            skills (array of skill names)

            If you can't find info for a specific field, fill in 'null'.

            Example:

            {
                \"heading\": \"Full Stack Developer\",
                \"requires_work_permit\": true,
                \"work_permit_country_code\": \"USA\",
                \"city\": \"San Francisco\",
                \"company\": \"Google\",
                \"is_remote\": true,
                \"is_hybrid\": false,
                \"days_in_office_per_week\": 0,
                \"salary_from\": 100,
                \"salary_to\": null,
                \"salary_period\": \"annual\",
                \"salary_currency\": null,
                \"timezone_from\": null,
                \"timezone_to\": null,
                \"skills\": [ \"PHP\", \"JavaScript\" ]
            }

            Your response should contain only the JSON object.

            {$extraPromptInfo}

            Here is the job description:
            {$jobSpec->original_description_text}
        ";

        $ollama = new \App\Services\LLM\Ollama();
        $LLMResponse = $ollama->prompt(LLMData::LLAMA3_2_3B_INSTRUCT_Q80, $prompt, $jobSpec);
        UseLLMResponse::dispatch($LLMResponse);

//        $openai = new \App\Services\LLM\OpenAI();
//        $LLMResponse = $openai->prompt(LLMData::GPT_4O_MINI, $prompt, $jobSpec);
//        UseLLMResponse::dispatch($LLMResponse);

//        $anthropic = new \App\Services\LLM\Anthropic();
//        $LLMResponse = $anthropic->prompt(LLMData::CLAUDE_3_HAIKU, $prompt, $jobSpec);
//        UseLLMResponse::dispatch($LLMResponse);

//        $anthropic = new \App\Services\LLM\Anthropic();
//        $LLMResponse = $anthropic->prompt(LLMData::CLAUDE_3_SONNET, $prompt, $jobSpec);
//        UseLLMResponse::dispatch($LLMResponse);

//        $replicate = new \App\Services\LLM\Replicate();
//        $replicate->promptAsync(LLMData::META_LLAMA_3_8B_INSTRUCT, $prompt, $jobSpec);
    }

    public function asJob(JobSpec $jobSpec): void
    {
        $this->handle($jobSpec);
    }

    public string $commandSignature = 'job-specs:prompt-llm {jobSpecId}';
    public string $commandDescription = 'Fill in the job data that we need to get from an LLM';
    public string $commandHelp = 'Fill in the job data that we need to get from an LLM';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $jobSpecId = $command->argument('jobSpecId');
        if ($jobSpecId === null) {
            $command->error('No jobSpec id provided');

            return $command::FAILURE;
        }

        $jobSpec = JobSpec::findOrFail($jobSpecId);

        $this->handle($jobSpec);

        return $command::SUCCESS;
    }
}
