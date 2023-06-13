<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AllController::class, 'home'])->name('home.index');
Route::get('/about', [\App\Http\Controllers\AllController::class, 'about'])->name('about.index');
Route::get('/service', [\App\Http\Controllers\AllController::class, 'service'])->name('service.index');
Route::get('/price', [\App\Http\Controllers\AllController::class, 'price'])->name('price.index');
Route::get('/blog', [\App\Http\Controllers\AllController::class, 'blog'])->name('blog.index');
Route::get('/profile', [\App\Http\Controllers\AllController::class, 'profile'])->name('profile.index');
Route::get('/pay', [\App\Http\Controllers\AllController::class, 'pay'])->name('pay.index');
Route::post('/pay/buy', [\App\Http\Controllers\AllController::class, 'pay_buy'])->name('pay.buy');

Auth::routes();
