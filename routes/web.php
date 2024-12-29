<?php

// use Illuminate\Support\Facades\Route;



// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/jobs', 'JobController@index')->name('jobs.index');
// Route::get('/jobs/{job}', 'JobController@show')->name('jobs.show');
// Route::get('/categories', 'CategoryController@index')->name('categories.index');
// Route::get('/contact', 'ContactController@index')->name('contact');

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [JobController::class, 'index'])->name('jobs.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');