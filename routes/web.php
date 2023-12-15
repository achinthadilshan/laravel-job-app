<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// All Jobs
Route::get('/', [JobController::class, 'index'])->name('jobs.index');

// Job Create Form
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');

// Store Job Data
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

// Show Edit Form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');

// Update Job
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

// Single Job
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
