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
            ->join('answers', 'answers.job_id', '=', 'raw_jobs.id')
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->select('raw_jobs.id', 'raw_jobs.original_description_html')
            ->get();

        RawJob::orderBy('post_date', 'desc')->get();

        $count = RawJob::count();

        return Inertia::render('Admin/JobsList', [
            'count' => $count,
            'rawJobs' => $rawJobs
        ]);
    }
}
