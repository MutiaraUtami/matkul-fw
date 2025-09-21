<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// CRUD Product
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/', [ProductController::class, 'store'])->name('product.store');
    Route::get('/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

// Auth routes (login, register, dll)
require __DIR__.'/auth.php';

// Halaman utama
Route::get('/', fn() => view('welcome'))->name('home');

// Dashboard (hanya admin)
Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware('auth')
    ->name('dashboard');

// ⚠️ jangan bikin route `/product` lagi (sudah ada di atas)

// Static pages
Route::view('/about', 'about')->name('about');
Route::view('/courses', 'courses')->name('courses');
Route::view('/contact', 'contact')->name('contact');

// Route dengan parameter
Route::get('/courses/{name}', fn($name) => "Kamu sedang melihat course: " . ucfirst($name))
    ->name('courses.show');

// Grouping untuk kategori courses
Route::prefix('courses')->group(function () {
    Route::get('framework-web', fn() => "Ini adalah halaman Framework Web")
        ->name('framework-web');

    Route::get('framework-web/{lesson}', fn($lesson) => "Framework Web - Pelajaran ke-{$lesson}")
        ->name('framework-web.lesson');

    Route::get('mobile-programming', fn() => "Ini adalah halaman Mobile Programming")
        ->name('mobile-programming');

    Route::get('mobile-programming/{lesson}', fn($lesson) => "Mobile Programming - Pelajaran ke-{$lesson}")
        ->name('mobile-programming.lesson');
});
