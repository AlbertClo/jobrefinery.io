<?php

use App\Actions\Webhooks\Replicate\Prompts;
use Illuminate\Support\Facades\Route;

Route::get('/test', [\App\Http\Controllers\TestController::class, 'test']);
Route::post('/test', [\App\Http\Controllers\TestController::class, 'test']);

Route::post('/webhooks/replicate/prompts/{id}', Prompts::class)->name('api.webhooks.replicate.prompts');
