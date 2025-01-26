<?php

namespace App\Services\LLM\Providers;

use App\Models\LLM;
use App\Models\LLMResponse;
use App\Models\SeedableEnums\LLMEnum;
use App\Services\LLM\LLMInterface;
use Aws\Bedrock\BedrockClient;
use Aws\BedrockRuntime\BedrockRuntimeClient;
use Aws\Exception\AwsException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AwsBedrock implements LLMInterface
{
    private BedrockRuntimeClient $client;

    public function __construct()
    {
        $this->client = new BedrockRuntimeClient([
            'version' => 'latest',
            'region' => config('services.aws.region'),
            'credentials' => [
                'key' => config('services.aws.key'),
                'secret' => config('services.aws.secret'),
            ],
        ]);
    }

    public function prompt(string $llm, string $prompt, Model $relatedEntity = null): LLMResponse
    {
        $uuid = Str::uuid();
        $promptTimestamp = now();

        $body = $this->getRequestBody($llm, $prompt);

        try {
            $result = $this->client->invokeModel([
                'modelId' => $llm,
                'body' => json_encode($body),
                'contentType' => 'application/json',
                'accept' => 'application/json',
            ]);

            $response = json_decode($result['body']->getContents(), true);

            $llmModel = LLM::where('slug', $llm)->first();

            $responseText = $this->extractResponseText($response, $llm);
            $usage = $this->extractUsage($response, $llm);

            $cost = $llmModel->input_token_cost_per_million * $usage['input_tokens'] / 1000000 +
                $llmModel->output_token_cost_per_million * $usage['output_tokens'] / 1000000;

            $LLMResponse = new LLMResponse();
            $LLMResponse->id = $uuid;
            $LLMResponse->prompt = $prompt;
            $LLMResponse->prompt_timestamp = $promptTimestamp;
            $LLMResponse->llm = $llm;
            $LLMResponse->response = $responseText;
            $LLMResponse->response_timestamp = now();
            $LLMResponse->input_tokens = $usage['input_tokens'];
            $LLMResponse->output_tokens = $usage['output_tokens'];
            $LLMResponse->cost = $cost;
            $LLMResponse->save();

            $relatedEntity?->llmResponses()->save($LLMResponse);

            return $LLMResponse;
        } catch (AwsException $e) {
            throw new \RuntimeException("AWS Bedrock Error: " . $e->getMessage());
        }
    }

    private function getRequestBody(string $llm, string $prompt): array
    {
        switch ($llm) {
            case LLMEnum::TITAN_EXPRESS->value:
            case LLMEnum::TITAN_PREMIER->value:
                return [
                    'inputText' => $prompt,
                    'textGenerationConfig' => [
                        'maxTokenCount' => 2048,
                        'temperature' => 0.7,
                        'topP' => 0.9
                    ]
                ];
            case LLMEnum::NOVA_MICRO->value:
            case LLMEnum::NOVA_LITE->value:
                return [
                    'inferenceConfig' => [
                        'max_new_tokens' => 2048
                    ],
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ];
            default:
                return throw new \InvalidArgumentException("Unsupported model: $llm");
        }
    }

    private function extractResponseText(array $response, string $llm): string
    {
        switch ($llm) {
            case LLMEnum::TITAN_EXPRESS->value:
            case LLMEnum::TITAN_PREMIER->value:
                return $response['results'][0]['outputText'];
            case LLMEnum::NOVA_MICRO->value:
            case LLMEnum::NOVA_LITE->value:
                return $response['output']['message']['content'][0]['text'];
            default:
                return throw new \InvalidArgumentException("Unsupported model: $llm");
        }
    }

    private function extractUsage(array $response, string $llm): array
    {
        switch ($llm) {
            case LLMEnum::TITAN_EXPRESS->value:
            case LLMEnum::TITAN_PREMIER->value:
                return [
                    'input_tokens' => $response['inputTextTokenCount'],
                    'output_tokens' => $response['results'][0]['tokenCount']
                ];
            case LLMEnum::NOVA_MICRO->value:
            case LLMEnum::NOVA_LITE->value:
                return [
                    'input_tokens' => $response['usage']['inputTokens'],
                    'output_tokens' => $response['usage']['outputTokens']
                ];
            default:
                return throw new \InvalidArgumentException("Unsupported model: $llm");
        }
    }
}


