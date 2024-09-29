<?php

namespace App\Actions\Webhooks\Replicate;

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
        $llmResponse->response = implode(' ', $request->get('output'));
        $llmResponse->response_timestamp = now();
        $llmResponse->input_tokens = $inputTokens;
        $llmResponse->output_tokens = $outputTokens;
        $llmResponse->cost = $cost;
        $llmResponse->save();

        return response()->noContent();
    }
}
