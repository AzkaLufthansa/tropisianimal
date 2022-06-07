<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBeritaController;
use App\Models\Berita;

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
        'title' => 'Home',
        'berita' => Berita::latest()->limit(6)->get()
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak'
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita',
        'berita' => Berita::latest()->paginate(7)
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

Route::get('/berita/{berita:slug}', function(Berita $berita) {
    return view('single_news', [
        'title' => 'Single News',
        'berita' => $berita
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/berita', DashboardBeritaController::class)->middleware('auth');