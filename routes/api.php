<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);
Route::post('/test', [\App\Http\Controllers\TestController::class, 'test']);
