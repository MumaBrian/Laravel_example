<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;

class JobController extends Controller
{
    public function index() {
        $jobs= Job::with('employer')->latest()->simplePaginate(2);
        return view('jobs/index', 
        [
            'jobs' => $jobs
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function store() {
        request()->validate([
            'title' => ['required','min:4'],
            'salary' => ['required']
        ]);

        $job =Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );
        return redirect('/jobs');
    }

    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update($id) {
        request()->validate([
            'title' => ['required','min:4'],
            'salary' => ['required']
        ]);
        $job = Job::findOrFail($id);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job) {
        $job->delete();
        return redirect('/jobs');
    }
}
