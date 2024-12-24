<?php

namespace App\Actions\Questions;

use App\Models\Answer;
use App\Models\RawJob;
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
    public function handle(LLM $llm, RawJob $rawJob, Question $question, float $temperature = 0.7): void
    {
        $q = str_replace("\{\$jobDescription\}", $rawJob->original_description_text, $question->question);

        $ollama = new Ollama();
        $LLMResponse = $ollama->prompt(
            llm: $llm->slug,
            prompt: $q,
            relatedEntity: $rawJob,
            temperature: $temperature
        );

        $a = $this->extractAnswerObjectFromLLMResponse($LLMResponse);
        if ($a !== null) {
            $a = json_encode($a);
        }

        $answer = new Answer();
        $answer->question_id = $question->id;
        $answer->raw_job_id = $rawJob->id;
        $answer->llm_response_id = $LLMResponse->id;
        $answer->temperature = $LLMResponse->temperature;
        $answer->author_id = $llm->slug;
        $answer->author_type = $llm->getMorphClass();
        $answer->answer = $a;
        $answer->save();
    }

    public function asJob(LLM $llm, RawJob $job, Question $question, float $temperature = 0.7): void
    {
        $this->handle(
            llm: $llm,
            rawJob: $job,
            question: $question,
            temperature: $temperature
        );
    }

    public string $commandSignature = 'questions:ask {llmSlug} {rawJobId} {questionId}';
    public string $commandDescription = 'Ask a question to an LLM';
    public string $commandHelp = 'Ask a question to an LLM';
    public bool $commandHidden = false;

    /**
     * @throws ConnectionException
     */
    public function asCommand(Command $command): int
    {
        $llmSlug = $command->argument('llmSlug');
        if ($llmSlug === null) {
            $command->error('No llm slug provided');
            return $command::FAILURE;
        }

        $rawJobId = $command->argument('rawJobId');
        if ($rawJobId === null) {
            $command->error('No raw job id provided');
            return $command::FAILURE;
        }

        $questionId = $command->argument('questionId');
        if ($questionId === null) {
            $command->error('No question id provided');

            return $command::FAILURE;
        }

        $llm = LLM::where('slug', $llmSlug)->firstOrFail();
        $rawJob = RawJob::where('id', $rawJobId)->firstOrFail();
        $question = Question::where('id', $questionId)->firstOrFail();

        $this->handle(
            llm: $llm,
            rawJob: $rawJob,
            question: $question,
            temperature: 0.7
        );

        return $command::SUCCESS;
    }

    /**
     * @throws Exception
     */
    public function extractAnswerObjectFromLLMResponse(LLMResponse $llmResponse): array|null
    {
        $response = $llmResponse->response;
        $start = strpos($response, '{');
        $end = strrpos($response, '}');

        if ($start === false || $end === false) {
            return null;
        }

        $json = substr($response, $start, $end - $start + 1);
        $responseArray = json_decode($json, true);
        if ($responseArray === null && json_last_error() !== JSON_ERROR_NONE) {
            return null;
        }

        if (!$responseArray['answer']) {
            return null;
        }

        if (is_string($responseArray['answer'])) {
            return [$responseArray['answer']];
        }

        return $responseArray['answer'];
    }
}
