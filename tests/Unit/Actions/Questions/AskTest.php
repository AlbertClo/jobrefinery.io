<?php

namespace Tests\Unit\Actions\Questions;

use App\Actions\Questions\Ask;
use App\Models\LLMResponse;

test('it returns null when no json object is found in response', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = 'This is a response with no JSON';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)->toBeNull();
});

test('it returns null when invalid json is found in response', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = 'Some text { "answer": invalid_json }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)->toBeNull();
});

test('it returns null when json has no answer key', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{ "something": "else" }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)->toBeNull();
});

test('it returns array with single string when answer is string', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{ "answer": "single answer" }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)
        ->toBeArray()
        ->toHaveCount(1)
        ->toContain('single answer');
});

test('it returns sorted array when answer is array', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{ "answer": ["c", "b", "a"] }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)
        ->toBeArray()
        ->toHaveCount(3)
        ->toBe(['a', 'b', 'c']);
});

test('it handles json within other text', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = 'Some text before { "answer": ["test"] } and after';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)
        ->toBeArray()
        ->toHaveCount(1)
        ->toContain('test');
});
