<?php

namespace App\Http\Controllers;

use App\Models\RawJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class JobsListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $rawJobs = DB::query()
            ->from('raw_jobs')
            ->join('answers', 'answers.raw_job_id', '=', 'raw_jobs.id')
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->select('raw_jobs.id', 'raw_jobs.original_description_html')
            ->selectRaw(
                "json_build_object(
                    'questions',
                    ARRAY[
                        json_build_object(
                            questions.summary,
                            json_agg(
                                json_build_object(
                                    'author', answers.author_id,
                                    'answer', answers.answer
                                )
                            )
                        )
                    ]
                ) as questions_and_answers"
            )
            ->groupBy(
                'raw_jobs.id',
                'raw_jobs.original_description_html',
                'questions.summary'
            )
            ->limit(20)
            ->get();

//        $rawJobs->map(function ($rawJob) {
//            foreach (json_decode($rawJob->questions_and_answers) as $qna) {
//                foreach ($qna as $q) {
//                    foreach ($q as $a) {
//                        //dump($a);
//                        foreach ($a as $authorAndAnswer) {
//                            //dump($authorAndAnswer);
//                            foreach ($authorAndAnswer->answer ?? [] as $role) {
//                                dump($role);
//                            }
//                        }
//                    }
//                }
//            }
//        });

        RawJob::orderBy('post_date', 'desc')->get();
        $count = RawJob::count();

        return Inertia::render('Admin/JobsList', [
            'count' => $count,
            'rawJobs' => $rawJobs
        ]);
    }
}
