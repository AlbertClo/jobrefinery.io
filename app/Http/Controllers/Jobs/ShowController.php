<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\RefinedJob;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(string $id)
    {
        $job = RefinedJob::where('id', $id)->first();



        return Inertia::render('Jobs/Show', [
            'job' => $job,
        ]);
    }
}
