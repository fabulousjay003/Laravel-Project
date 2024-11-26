<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    return view(
        'home'
    );
});


Route::get('/jobs', function () {
    $jobs = job::with('employer')->cursorPaginate(10); //eager loading with pagination
    return  view(
        'jobs',
        [
            // 'jobs' => Job::all()
            "jobs"  => $jobs
        ]

    );
});


Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
