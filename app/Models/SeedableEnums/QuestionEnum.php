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
    case DETERMINE_SALARY = "12f2a5c8-edd4-4ae4-b580-daff58316820";

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
                "parameters" => json_encode([
                    "jobDescription",
                ]),
            ],
            self::LIST_ROLES => [
                "id" => self::LIST_ROLES,
                "summary" => "What role or roles is this job description hiring for?",
                "related_field" => "heading",
                "question" => "
                    I'm going to give you a job description.
                    And I'm going to ask you a question about the job description.
                    Please provide your answer as a JSON object.

                    The job description is:
                    \"\{\$jobDescription\}\"

                    The question is \"What role or roles is this job description hiring for?\"

                    Please write the roles in title case. E.g. Software Engineer, Data Analyst, Product Manager, Operations Manager

                    Please expand the following abbreviations:
                    \"Eng\" should become \"Engineer\",
                    \"Sr\" should become \"Senior\",

                    Make sure not to include trailing commas in the JSON array. Because that's not valid JSON.

                    Examples of answers in the correct format:
                    ---
                    {
                        \"answer\": [
                            \"Software Engineer\",
                            \"Data Analyst\",
                            \"Product Manager\",
                            \"Operations Manager\"
                    }
                    ---
                    {
                        \"answer\": [
                            \"Full Stack Developer\"
                    }
                    ---
                    {
                        \"answer\": [
                            \"Node.js Developer\",
                            \"React Developer\"
                    }
                    ---
                    {
                        \"answer\": [
                            \"Engineering Team Lead\"
                    }
                    ---
                    {
                        \"answer\": [
                            \"Senior Data Analyst\"
                    }

                    Examples of answers in with incorrect format:
                    ---
                    {\"answer\":[{\"role\":\"Full-Stack Software Engineer\"},{\"role\":\"Data Scientist\"},{\"role\":\"Technical Product Manager\"}]}
                    The role array should just be a list of simple strings. It should not be a list an objects.

                    {
                        \"answer\": [
                            \"Software Engineer\",
                            \"Data Analyst\",
                            \"Product Manager\",
                            \"Operations Manager\",
                    }
                    Notice the trailing comma after the last role. This is incorrect. Not valid JSON.
                ",
                "parameters" => json_encode([
                    "jobDescription",
                ]),
            ],
            self::DETERMINE_SALARY => [
                "id" => self::DETERMINE_SALARY,
                "summary" => "What is the salary range for this role?",
                "related_field" => "heading",
                "question" => "
                    We've got this job description:

                    \"\{\$rawJobDescription\}\"

                    We've extracted the following role tiles from the job description:

                    \{\$extractedRoles\}

                    Next we want to extract the salary information for the \{\$refinedJobHeading\} role.

                    Please write your answer in the following format:
                    {
                        \"answer\": {
                            \"salary_from\": \$salaryFrom,
                            \"salary_to\": \$salaryTo,
                            \"salary_currency\": \$salaryCurrency,
                            \"salary_currency\": \$salaryCurrency,
                            \"salary_period\": \$salaryPeriod,
                        }
                    }

                    salary_from and salary_to should be integers, without thousands separators, and without currency symbols.
                    salary_currency should be a valid ISO 4217 currency code. E.g. USD, EUR, GBP, etc.

                    If a salary number is written with a 'k', e.g. 100k, then expand it. E.g. 100k becomes 100000. 185k becomes 185000.

                    If they don't specify a currency, then assume it's USD.

                    If they give a single salary number instead of a range, then write that number in the salary_from and salary_to fields.

                    Make sure not to include trailing commas in the JSON array. Because that's not valid JSON.

                    salary_period should be either 'yearly' or 'monthly'. Not 'annually' or 'weekly'.
                    If not specified, assume 'yearly'.

                    Examples of answers in the correct format:
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 100000,
                            \"salary_to\": 100000,
                            \"salary_currency\": USD,
                            \"salary_period\": \"yearly\",
                        }
                    }
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 5000,
                            \"salary_to\": 5500,
                            \"salary_currency\": \"GBP\",
                            \"salary_period\": \"monthly\",
                        }
                    }
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 70000,
                            \"salary_to\": 70000,
                            \"salary_currency\": \"EUR\",
                            \"salary_period\": \"yearly\",
                        }
                    }
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 185000,
                            \"salary_to\": 200000,
                            \"salary_currency\": \"USD\",
                            \"salary_period\": \"yearly\",
                        }
                    }

                    Examples of answers in with incorrect format:
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": \"185k\",
                            \"salary_to\": \"200k\",
                            \"salary_currency\": \"\$\",
                            \"salary_period\": \"yearly\",
                        }
                    }
                    salary_from should be 185000.
                    salary_to should be 200000.
                    salary_currency should be USD.
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 185000,
                            \"salary_to\": 200000,
                            \"salary_currency\": \"USD\",
                        },
                    }
                    salary_period is missing.
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 185000,
                            \"salary_to\": 200000,
                            \"salary_currency\": \"USD\",
                            \"salary_period\": \"annually\",
                        },
                    }
                    salary_period should be 'yearly'.
                    ---
                    {
                        \"answer\": {
                            \"salary_from\": 185000,
                            \"salary_to\": 200000,
                            \"salary_currency\": \"USD\",
                            \"salary_period\": \"yearly\",
                        },
                    }
                    Notice the trailing commas. This is incorrect. Not valid JSON.

                    Lastly, please make sure to only give salary numbers if they actually appear in the job description.
                    Don't guess or make up numbers. If there is not salary specified, fill in null for all the fields.
                    e.g.
                    {
                        \"answer\": {
                            \"salary_from\": null,
                            \"salary_to\": null,
                            \"salary_currency\": null,
                            \"salary_period\": null
                        },
                    }
                ",
                "parameters" => json_encode([
                    "rawJobDescription",
                    "extractedRoles",
                    "refinedJobHeading",
                ]),
            ],
        };
    }
}
