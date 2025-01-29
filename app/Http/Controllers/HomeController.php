<?php

namespace App\Http\Controllers;

use App\Models\RefinedJob;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = RefinedJob::query()
            ->orderBy('post_date', 'desc');

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('heading', 'like', "%{$searchTerm}%")
                    ->orWhere('description', 'like', "%{$searchTerm}%");
            });
        }

        $refinedJobs = $query->limit(100)->get();

        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'refinedJobs' => $refinedJobs,
            'filters' => [
                'search' => $request->input('search'),
            ],
        ]);
    }
}

