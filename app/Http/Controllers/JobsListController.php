<?php

namespace App\Http\Controllers;

use App\Models\JobSpec;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobsListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $jobs = JobSpec::whereNotNull('heading')->orderBy('post_date', 'desc')->get();

        $count = JobSpec::whereNotNull('heading')->count();

        return Inertia::render('Admin/JobsList', [
            'count' => $count,
            'jobs' => $jobs
        ]);
    }
}
