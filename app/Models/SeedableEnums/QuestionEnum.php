<?php

namespace App\Models\SeedableEnums;

use App\Models\SeedableEnums\Contracts\SeedableEnum;
use App\Models\SeedableEnums\Traits\SeedableEnumTrait;
use App\Models\Question;

enum QuestionEnum: string implements SeedableEnum
{
    use SeedableEnumTrait;

    case MULTIPLE_JOB_ROLES = "5513c687-74a4-4b2b-a337-f69c446bfda5";
    case LIST_ROLES = "bf77026b-a054-4399-8001-f82124169bef";

    public static function getModelClass(): string
    {
        return Question::class;
    }

    public function getData(): array
    {
        return match ($this) {
            self::MULTIPLE_JOB_ROLES => [
                "id" => self::MULTIPLE_JOB_ROLES,
                "summary" => "Does this job description contain one job role or multiple job roles?",
                // todo rename this to question, and rename question to 'context'
                "related_field" => "heading",
                "question" => "
                    I'm going to give you a job description.
                    And I'm going to ask you a question about the job description.
                    Please provide your answer as a JSON object.

                    The job description is:
                    \"\{\$jobDescription\}\"

                    The question is \"Does this job description contain one job role or multiple job roles?\"

                    Your answer should either be
                    {
                        \"answer\": \"one\",
                    }
                    or
                    {
                        \"answer\": \"multiple\",
                    }
                ",
            ],
            self::LIST_ROLES => [
                "id" => self::LIST_ROLES,
                "summary" => "What role or roles is this job description hiring for?",
                // todo rename this to question, and rename question to 'context'
                "related_field" => "heading",
                "question" => "
                    I'm going to give you a job description.
                    And I'm going to ask you a question about the job description.
                    Please provide your answer as a JSON object.

                    The job description is:
                    \"\{\$jobDescription\}\"

                    The question is \"What role or roles is this job description hiring for?\"

                    Example answers
                    ---
                    {
                        \"answer\": [
                            \"software engineer\",
                            \"data analyst\",
                            \"product manager\",
                            \"operations manager\",
                    }
                    ---
                    {
                        \"answer\": [
                            \"full stack developer\",
                    }
                    ---
                    {
                        \"answer\": [
                            \"Node.js developer\",
                            \"React developer\",
                    }
                    {
                        \"answer\": [
                            \"Engineering team lead\",
                    }
                ",
            ],
        };
    }
}
