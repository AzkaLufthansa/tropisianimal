<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('index', [
        'title' => 'Home'
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak'
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita'
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'title' => 'Galeri'
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        'title' => 'Tentang'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
