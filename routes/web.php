<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;



Route::view('/', 'home');


// Route::controller(JobController::class)->group(
//     function () {
//         // //all jobs or index
//         // Route::get('/jobs', 'index');

//         // //create job
//         // Route::get('/jobs/create', 'create');


//         // //edit job
//         // Route::get('/jobs/{job}/edit', 'edit');


//         // //show job
//         // Route::get('/jobs/{job}', 'show');

//         // //store job
//         // Route::post('/jobs', 'store');

//         // //update
//         // Route::patch('/jobs/{job}', 'update');


//         // //Destroy
//         // Route::delete('/jobs/{job}',  'destroy');

//     }
// );

Route::resource('jobs', JobController::class);
Route::view('/contact', 'contact');
