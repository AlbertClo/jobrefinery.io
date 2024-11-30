<?php

namespace App\Actions\Jobs;

use App\Models\RawJob;
use App\Models\RefinedJob;
use App\Models\SeedableEnums\JobSiteEnum;
use App\Models\SeedableEnums\LLMEnum;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;

class PromptLLM
{
    use AsAction;

    public function handle(RawJob $rawJob): void
    {
        $extraPromptInfo = '';
        if ($rawJob->job_site_id === JobSiteEnum::HACKER_NEWS->id()) {
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
            {$rawJob->original_description_text}
        ";

        $ollama = new \App\Services\LLM\Ollama();
        $LLMResponse = $ollama->prompt(LLMEnum::LLAMA3_2_3B_INSTRUCT_Q80->value, $prompt, $rawJob);
        AskAllQuestions::dispatch($LLMResponse);

//        $openai = new \App\Services\LLM\OpenAI();
//        $LLMResponse = $openai->prompt(LLMEnum::GPT_4O_MINI, $prompt, $job);
//        UseLLMResponse::dispatch($LLMResponse);

//        $anthropic = new \App\Services\LLM\Anthropic();
//        $LLMResponse = $anthropic->prompt(LLMEnum::CLAUDE_3_HAIKU, $prompt, $job);
//        UseLLMResponse::dispatch($LLMResponse);

//        $anthropic = new \App\Services\LLM\Anthropic();
//        $LLMResponse = $anthropic->prompt(LLMEnum::CLAUDE_3_SONNET, $prompt, $job);
//        UseLLMResponse::dispatch($LLMResponse);
    }

    public function asJob(RefinedJob $job): void
    {
        $this->handle($job);
    }

    public string $commandSignature = 'jobs:prompt-llm {jobId}';
    public string $commandDescription = 'Fill in the job data that we need to get from an LLM';
    public string $commandHelp = 'Fill in the job data that we need to get from an LLM';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $jobId = $command->argument('jobId');
        if ($jobId === null) {
            $command->error('No job id provided');

            return $command::FAILURE;
        }

        $job = RefinedJob::where('id', $jobId)->firstOrFail();

        $this->handle($job);

        return $command::SUCCESS;
    }
}
