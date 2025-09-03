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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Grouping Route untuk kategori courses
Route::prefix('courses')->group(function () {
    Route::get('framework-web', function () {
        return "Ini adalah halaman Framework Web";
    })->name('framework-web');

    Route::get('mobile-programming', function () {
        return "Ini adalah halaman Mobile Programming";
    })->name('mobile-programming');
});
