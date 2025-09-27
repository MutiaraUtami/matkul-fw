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
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/rahasia', function () {
    return 'ini halaman rahasia';
})->middleware('auth', 'RoleCheck:admin');

Route::get('/produk', [ProductController::class, 'index']);
    
use App\Http\Controllers\ProductController;


Route::get('/produk/{angka}', [ProductController::class, 'cekAngka']);


require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/utamas', function () {
    return view('navbars.utamas');
});

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