<?php

namespace App\Actions\Questions;

use App\Models\Answer;
use App\Models\Job;
use App\Models\LLM;
use App\Models\LLMResponse;
use App\Models\Question;
use App\Services\LLM\Ollama;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class Ask
{
    use AsAction;

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function handle(LLM $llm, Job $job, Question $question): void
    {
        $q = "I'm going to give you a job description. And I'm going to ask you a question about the job description.
            I want you to provide your answer as a JSON object.

            The job description is:
            \"{$job->original_description_text}\"

            The question is \"What is the salary range?\"

            You answer should follow this format:
            {
                \"answer\": \"$90k to $100k\",
            }
        ";


        $ollama = new Ollama();
        $LLMResponse = $ollama->prompt($llm->slug, $q, $job);

        $answer = new Answer();
        $answer->question_id = $question->id;
        $answer->job_id = $job->id;
        $answer->author_id = $llm->slug;
        $answer->author_type = $llm->getMorphClass();
        $answer->answer = $this->extractAnswerFromLLMResponse($LLMResponse);;
        $answer->save();
    }

    public function asJob(LLM $llm, Job $job, Question $question): void
    {
        $this->handle($llm, $job, $question);
    }

    public string $commandSignature = 'questions:ask {llmSlug} {jobId} {questionId}';
    public string $commandDescription = 'Ask a question to an LLM';
    public string $commandHelp = 'Ask a question to an LLM';
    public bool $commandHidden = false;

    public function asCommand(Command $command): int
    {
        $llmSlug = $command->argument('llmSlug');
        if ($llmSlug === null) {
            $command->error('No llm slug provided');
            return $command::FAILURE;
        }

        $jobId = $command->argument('jobId');
        if ($jobId === null) {
            $command->error('No job id provided');
            return $command::FAILURE;
        }

        $questionId = $command->argument('questionId');
        if ($questionId === null) {
            $command->error('No question id provided');

            return $command::FAILURE;
        }


        $llm = LLM::where('slug', $llmSlug)->firstOrFail();
        $job = Job::where('id', $jobId)->firstOrFail();
        $question = Question::where('id', $questionId)->firstOrFail();

        $this->handle($llm, $job, $question);

        return $command::SUCCESS;
    }

    /**
     * @throws Exception
     */
    public function extractAnswerFromLLMResponse(LLMResponse $llmResponse): string
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

        if (!$responseArray['answer']) {
            throw new Exception("Error: Unable to find answer in response");
        }

        return $responseArray['answer'];
    }
}
