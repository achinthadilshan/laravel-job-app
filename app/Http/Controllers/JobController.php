<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Models\Job;

class JobController extends Controller
{
    // show all the jobs
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::Latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }

    // show single job
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    // show create form
    public function create()
    {
        return view('jobs.create');
    }

    // store job data
    public function store(StoreJobRequest $request)
    {
        Job::create($request->validated());

        return redirect()->route('jobs.index')->with('status', 'Job created successfully!');
    }
}
