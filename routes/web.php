<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\HadiahUndianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemenangController;
use App\Http\Controllers\PemenangUndianController;
use App\Http\Controllers\UndianController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.pages_auth.login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('data_peserta', DataPesertaController::class);
    Route::resource('pemenang_undian', PemenangController::class);
    Route::resource('hadiah_undian', HadiahUndianController::class);
    Route::get('/undian', [UndianController::class, 'index'])->name('undian.index');
    Route::post('/undian/simpan', [HomeController::class, 'simpanUndian'])->name('undian.simpan');
});
