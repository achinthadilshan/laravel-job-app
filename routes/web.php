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

// all jobs
Route::get('/', [JobController::class, 'index'])->name('jobs.index');

// job create form
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');

// store job data
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

// single job
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
