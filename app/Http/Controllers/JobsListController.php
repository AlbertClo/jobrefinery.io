<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobsListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $jobs = Job::whereNotNull('heading')->orderBy('post_date', 'desc')->get();

        $count = Job::whereNotNull('heading')->count();

        return Inertia::render('Admin/JobsList', [
            'count' => $count,
            'jobs' => $jobs
        ]);
    }
}
