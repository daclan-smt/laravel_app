<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// First, greet the user
Route::get('/', [GreetController::class, 'index'])->name('greet.index');

// Proceed to the tasks page
Route::get('/proceed', [GreetController::class, 'proceed'])->name('greet.proceed');

// CRUD for tasks
Route::resource('tasks', TaskController::class);
