<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', HomeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Admin routes
 */
Route::middleware(['auth', 'can:administer'])->group(function () {
    Route::get('/admin/jobs', JobsListController::class)->name('admin.jobs.list');
    Route::get('/admin/stats', StatsController::class)->name('admin.stats');
    Route::get('/admin/dashboard', DashboardController::class)->name('admin.dashboard');
});

require __DIR__ . '/auth.php';
