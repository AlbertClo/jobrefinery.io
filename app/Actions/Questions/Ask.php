<?php

namespace App\Actions\Questions;

use App\Models\Answer;
use App\Models\RawJob;
use App\Models\LLM;
use App\Models\LLMResponse;
use App\Models\Question;
use App\Services\LLM\LLMService;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Lorisleiva\Actions\Concerns\AsAction;

class Ask
{
    use AsAction;

    /**
     * @throws ConnectionException
     * @throws Exception
     */
    public function handle(
        LLM $llm,
        Model $relatedEntity,
        Question $question,
        array $parameters,
        float $temperature = 0.7
    ): Answer {
        $q = $question->question;
        foreach ($parameters as $key => $parameter) {
            $q = str_replace("\{\$$key\}", $parameter, $q);
        }

        $llmService = new LLMService();
        $LLMResponse = $llmService->prompt(
            llm: $llm->slug,
            prompt: $q,
            relatedEntity: $relatedEntity,
            temperature: $temperature
        );

        $a = $this->extractAnswerObjectFromLLMResponse($LLMResponse);

        $answer = new Answer();
        $answer->question_id = $question->id;
        $answer->llm_response_id = $LLMResponse->id;
        $answer->temperature = $LLMResponse->temperature;
        $answer->author_id = $llm->slug;
        $answer->author_type = $llm->getMorphClass();
        $answer->answer = $a;
        $answer->save();

        $relatedEntity?->llmResponses()->save($answer);

        return $answer;
    }

    public function asJob(
        LLM $llm,
        Model $relatedEntity,
        Question $question,
        array $parameters,
        float $temperature = 0.7
    ): void {
        $this->handle(
            llm: $llm,
            relatedEntity: $relatedEntity,
            question: $question,
            parameters: $parameters,
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

        $parameters = [
            "jobDescription" => $rawJob->original_description_text,
        ];

        $this->handle(
            llm: $llm,
            relatedEntity: $rawJob,
            question: $question,
            parameters: $parameters,
            temperature: 0.7
        );

        return $command::SUCCESS;
    }

    /**
     * @throws Exception
     */
    public function extractAnswerObjectFromLLMResponse(LLMResponse $llmResponse): ?array
    {
        $response = $llmResponse->response;
        $start = strpos($response, '{');
        $end = strrpos($response, '}');

        if ($start === false || $end === false) {
            return null;
        }

        $json = substr($response, $start, $end - $start + 1);
        $responseArray = json_decode($json, true);

        if ($responseArray === null || !isset($responseArray['answer'])) {
            return null;
        }

        $responseArray['answer'] = $this->sortArraysRecursively($responseArray['answer']);

        return $responseArray;
    }

    private function sortArraysRecursively($value)
    {
        if (!is_array($value)) {
            return $value;
        }

        $isStringArray = array_is_list($value) && count(array_filter($value, 'is_string')) === count($value);

        foreach ($value as $key => $item) {
            $value[$key] = $this->sortArraysRecursively($item);
        }

        if ($isStringArray) {
            sort($value);
        }

        return $value;
    }
}
