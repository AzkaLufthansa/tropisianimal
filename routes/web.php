<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
