<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class StatsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $daysInOfficeBreakdown = DB::query()->from('jobs')
            ->select(DB::raw('count(id) as count'), 'days_in_office_per_week')
            ->groupBy('days_in_office_per_week')
            ->orderByDesc('days_in_office_per_week')
            ->get();

        return Inertia::render('Admin/Stats', [
            'daysInOfficeBreakdown' => $daysInOfficeBreakdown
        ]);
    }
}
