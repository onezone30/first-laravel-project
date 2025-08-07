<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Services\JobServices;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(JobServices $jobServices)
    {
        $showJobs = $jobServices->index();
        return $showJobs;
    }

    public function store(StoreJobRequest $storeJobRequest)
    {
        $attributes = $storeJobRequest->validated();

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        $attributes['featured'] = request()->has('featured');

        if($attributes['tags'] ?? false) {
            foreach(explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    public function create()
    {
        return view('jobs.create');
    }

}
