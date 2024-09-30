<?php

namespace App\Actions\Webhooks\Replicate;

use App\Actions\Jobs\UseLLMResponse;
use App\Models\LLM;
use App\Models\LLMResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Lorisleiva\Actions\Concerns\AsAction;

class Prompts
{
    use AsAction;

    public function handle($url): void
    {
    }

    public function asController(Request $request, $id): Response
    {
        $llm = LLM::find($request->get('model'));

        $inputTokens = $request->get('metrics')['input_token_count'];
        $outputTokens = $request->get('metrics')['output_token_count'];

        $cost = $llm->input_token_cost_per_million * $inputTokens / 1000000 +
            $llm->output_token_cost_per_million * $outputTokens / 1000000;

        $llmResponse = LLMResponse::find($id);
        $llmResponse->response = $this->decodeTokens(implode(' ', $request->get('output')));
        $llmResponse->response_timestamp = now();
        $llmResponse->input_tokens = $inputTokens;
        $llmResponse->output_tokens = $outputTokens;
        $llmResponse->cost = $cost;
        $llmResponse->save();

        UseLLMResponse::dispatch($llmResponse);

        return response()->noContent();
    }

    private function decodeTokens(string $text): string
    {
        $punctuationMarks = ['.', ',', ':', ';', '!', '?', '*', '-'];

        foreach ($punctuationMarks as $mark) {
            $text = preg_replace('/\s+\\' . $mark . '/', $mark, $text);
        }

        $text = preg_replace('/(\w)\s+-\s+(\w)/', '$1-$2', $text);

        return $text;
    }
}
