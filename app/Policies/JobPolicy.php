<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Log;

class JobPolicy
{
    public function edit(User $user, Job $job):bool
    {
        Log::info('User ID: ' . $user->id);
        Log::info('Employer User ID: ' . $job->employer->user->id);
        Log::info('Employer User ID: ' . optional($job->employer->user)->id);

        // return $job->employer->user->is($user);

        return $job->employer && $job->employer->user && $job->employer->user->is($user);
    }
}
