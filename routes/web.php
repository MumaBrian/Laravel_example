<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

// Route::get('/', function () {
//     return view('home');
// });
Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class);

Route::get('/register',[RegisteredUserController::class,'create']);

Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);

Route::post('/login',[SessionController::class,'store']);

// Route::get('/jobs', [JobController::class, 'index']);

// Route::get('/jobs/create', [JobController::class, 'create']);

// Route::post('/jobs', [JobController::class, 'store']);

// Route::get('/jobs/{job}', [JobController::class, 'show']);

// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Route::patch('/jobs/{job}', [JobController::class, 'update']);

// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::view('/contact','contact');
