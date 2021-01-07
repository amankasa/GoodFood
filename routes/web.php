<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\Auth\RegisterController;


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [PagesController::class, 'index']);

Route::get('/signup', [PagesController::class, 'signup']);

Route::get('/Companies', [PagesController::class, 'Companies']);

Route::get('/Company', [PagesController::class, 'Company']);

Route::post('loginSubmit', [PagesController::class, 'loginSubmit']);

Route::post('signStore', [PagesController::class, 'signStore']);