<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::get('/', function () {
    return view(
        'home'
    );
});

//all jobs or index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3); //eager loading with pagination
    return  view(
        'jobs.index',
        [
            // 'jobs' => Job::all()
            "jobs"  => $jobs
        ]

    );
});

//create job
Route::get('/jobs/create', function () {
    return  view(
        'jobs.create'

    );
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});


//show job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

//store job
Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

//update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate(
        [
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]
    );

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});


//Destroy
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});






Route::get('/contact', function () {
    return view('contact');
});
