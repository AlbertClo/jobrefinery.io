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

test('it preserves salary object structure', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{
        "answer": {
            "salary_from": 160000,
            "salary_to": 220000,
            "salary_currency": "USD",
            "salary_period": "yearly"
        }
    }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)
        ->toBeArray()
        ->toHaveKey('answer')
        ->and($result['answer'])
        ->toHaveKey('salary_from', 160000)
        ->toHaveKey('salary_to', 220000)
        ->toHaveKey('salary_currency', 'USD')
        ->toHaveKey('salary_period', 'yearly');
});

test('it preserves object structure', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{
        "answer": {
            "id": 123,
            "name": "Test",
            "details": {
                "active": true,
                "count": 42,
                "tags": ["c", "b", "a"]
            },
            "metadata": {
                "created_at": "2024-01-20",
                "status": "active"
            }
        }
    }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)
        ->toBeArray()
        ->toHaveKey('answer')
        ->and($result['answer'])
        ->toBeArray()
        ->toHaveKey('id', 123)
        ->toHaveKey('name', 'Test')
        ->toHaveKey('details')
        ->and($result['answer']['details'])
        ->toHaveKey('active', true)
        ->toHaveKey('count', 42)
        ->toHaveKey('tags', ['a', 'b', 'c'])
        ->and($result['answer']['metadata'])
        ->toHaveKey('created_at', '2024-01-20')
        ->toHaveKey('status', 'active');
});

test('it sorts nested string arrays while preserving structure', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{
        "answer": {
            "categories": ["Software Engineer", "Backend Engineer", "DevOps Engineer"],
            "levels": ["Senior", "Junior", "Mid"],
            "location": "Remote",
            "count": 42
        }
    }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result)
        ->toBeArray()
        ->toHaveKey('answer')
        ->and($result['answer'])
        ->toHaveKey('categories', ['Backend Engineer', 'DevOps Engineer', 'Software Engineer'])
        ->toHaveKey('levels', ['Junior', 'Mid', 'Senior'])
        ->toHaveKey('location', 'Remote')
        ->toHaveKey('count', 42);
});

test('it sorts deeply nested string arrays', function () {
    $ask = new Ask();
    $llmResponse = new LLMResponse();
    $llmResponse->response = '{
        "answer": {
            "jobs": {
                "engineering": ["DevOps", "Backend", "Frontend"],
                "design": ["UI", "UX", "Product"]
            }
        }
    }';

    $result = $ask->extractAnswerObjectFromLLMResponse($llmResponse);

    expect($result['answer']['jobs'])
        ->toHaveKey('engineering', ['Backend', 'DevOps', 'Frontend'])
        ->toHaveKey('design', ['Product', 'UI', 'UX']);
});
