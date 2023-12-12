<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // show all the jobs
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::all(),
        ]);
    }

    // show single job
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
}
