<?php

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

Route::get('/', function () {
    return view('index', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/job/{id}', function ($id) {
    return view('job_detail', [
        'job' => Job::find($id)
    ]);
});
