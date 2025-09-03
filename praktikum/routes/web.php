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

Route::get('/about',function (){
    return 'Ini Halaman About';
})->name(name: 'about');

Route::get('/contact',function (){
    return ('Ini adalah halaman kontak');
})->name(name: 'contact');

Route::get('/users/{id}', function ($id) {
    return "Nilai ID users adalah " . $id;
});

Route::prefix('manage')->group(function () {
    Route::get('/edit', function () {
        return "Ini adalah halaman manager/edit";
    });
    Route::get('/barang', function () {
        return "Ini adalah halaman manager/barang";
    });
});