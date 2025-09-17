<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route dengan parameter untuk Courses
Route::get('/courses/{name}', function ($name) {
    return "Kamu sedang melihat course: " . ucfirst($name);
})->name('courses.show');


// Grouping Route untuk kategori courses
Route::prefix('courses')->group(function () {
    Route::get('framework-web', function () {
        return "Ini adalah halaman Framework Web";
    })->name('framework-web');

    Route::get('framework-web/{lesson}', function ($lesson) {
        return "Framework Web - Pelajaran ke-{$lesson}";
    })->name('framework-web.lesson');

    Route::get('mobile-programming', function () {
        return "Ini adalah halaman Mobile Programming";
    })->name('mobile-programming');

    Route::get('mobile-programming/{lesson}', function ($lesson) {
        return "Mobile Programming - Pelajaran ke-{$lesson}";
    })->name('mobile-programming.lesson');
});