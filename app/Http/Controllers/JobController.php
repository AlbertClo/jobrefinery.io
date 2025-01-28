<?php

namespace App\Http\Controllers;

use App\Models\RefinedJob;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class JobController extends Controller
{
    public function __invoke(Request $request)
    {
        $refinedJobs = RefinedJob::query()
            ->orderBy('post_date', 'desc')
            ->limit(3000)
            ->get();

        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'refinedJobs' => $refinedJobs,
        ]);
    }
}
