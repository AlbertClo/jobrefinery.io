<?php

namespace App\Models\StaticData;

use App\Models\StaticData\Contracts\StaticDataContract;

class QuestionData implements StaticDataContract
{
    public const string MULTIPLE_JOB_ROLES = "5513c687-74a4-4b2b-a337-f69c446bfda5";

    public static function getModelClass(): string
    {
        return \App\Models\Question::class;
    }

    public static function getData(): array
    {
        return [
            [
                "id" => self::MULTIPLE_JOB_ROLES,
                "summary" => "Does this job description contain one job role or multiple job roles?", // todo rename this to question, and rename question to 'context'
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
            ]
        ];
    }
}
