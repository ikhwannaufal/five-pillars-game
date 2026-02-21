<?php

use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/story/start', [StoryController::class, 'start']);
Route::post('/story/next', [StoryController::class, 'next']);
Route::get('/story/{id}', [StoryController::class, 'show']);
