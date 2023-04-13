<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', \App\Http\Controllers\Home\IndexController::class)->name('home.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', \App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
    Route::get('/profile', \App\Http\Controllers\Profile\IndexController::class)->name('profile.index');
});

Auth::routes();
