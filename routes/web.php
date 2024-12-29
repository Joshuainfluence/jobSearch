<?php

// use Illuminate\Support\Facades\Route;



// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/jobs', 'JobController@index')->name('jobs.index');
// Route::get('/jobs/{job}', 'JobController@show')->name('jobs.show');
// Route::get('/categories', 'CategoryController@index')->name('categories.index');
// Route::get('/contact', 'ContactController@index')->name('contact');

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [JobController::class, 'index'])->name('jobs.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::get('/job-list', [JobListController::class, 'index'])->name('job-list.index');



