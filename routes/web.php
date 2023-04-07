<?php

declare(strict_types=1);

use App\Http\Controllers\Survey\IndexController;
use App\Http\Controllers\Survey\Question\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('surveys', IndexController::class);
Route::get('surveys/{survey}/questions', ShowController::class)
    ->name('surveys.questions.show');
