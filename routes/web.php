<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

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
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');

// Store Job Data
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');

// Show Edit Form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')->middleware('auth');

// Update Job
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update')->middleware('auth');

// Delete Job
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy')->middleware('auth');

// Manage Jobs
Route::get('/jobs/manage', [JobController::class, 'manage'])->name('jobs.manage')->middleware('auth');

// Single Job
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

// Show Register Form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');

// Create New User
Route::post('/register', [UserController::class, 'store']);

// Show Login Form
Route::get('/logout', [UserController::class, 'login'])->name('login')->middleware('guest');

// Authenticate User
Route::post('/authenticate', [UserController::class, 'authenticate']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Profile Page
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
