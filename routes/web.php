<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ApplicationController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/job-list', [JobListController::class, 'index'])->name('job-lsit');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/job-details', [JobDetailsController::class, 'index'])->name('job-details');

Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// For users ----authentication neeeded

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
});



// for admin panel

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/jobs', [App\Http\Controllers\Admin\JobController::class, 'index'])->name('jobs.index');
});


// Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');

// Route::post('about', [AboutController::class, 'index'])->name('about.index');







// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
