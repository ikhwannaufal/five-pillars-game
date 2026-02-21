<?php

use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::get('/story', [StoryController::class, 'index']);
Route::get('/story/start', [StoryController::class, 'start']);
Route::get('/story/{id}', [StoryController::class, 'show']);
