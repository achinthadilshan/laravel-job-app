<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    // Show All the Jobs
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::Latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    // Show Single Job
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('jobs.create');
    }

    // Store Job Data
    public function store(StoreJobRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            // Store the new image file
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $validatedData['user_id'] = auth()->id();

        Job::create($validatedData);

        return redirect(route('jobs.index'))->with('status', 'Job created successfully!');
    }

    // Show Edit Form
    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    // Update Job Data
    // Note: we can use same "StoreJobRequest" here since we don't have unique fields
    public function update(StoreJobRequest $request, Job $job)
    {
        // Make sure logged in user is owner
        if ($job->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            // Delete the existing image file if it exists
            if ($job->image) {
                Storage::disk('public')->delete($job->image);
            }

            // Store the new image file
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $job->update($validatedData);

        return redirect(route('jobs.show', ['job' => $job]))->with('status', 'Job updated successfully!');
    }

    // Delete Job
    public function destroy(Job $job)
    {
        // Make sure logged in user is owner
        if ($job->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $job->delete();
        return redirect(route('jobs.index'))->with('status', 'Job deleted successfully!');
    }

    // Show Manage Jobs Page
    public function manage()
    {

        return view('jobs.manage', [
            'jobs' => auth()->user()->jobs()->get()
        ]);
    }
}
