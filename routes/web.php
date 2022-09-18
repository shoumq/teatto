<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/category/{category}', [\App\Http\Controllers\MainController::class, 'category']);
Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories']);
Route::get('/product/{product}', [\App\Http\Controllers\MainController::class, 'product']);
Route::post('/price-list/submit', [\App\Http\Controllers\MainController::class, 'PLSubmit'])
    ->name('PLSubmit');

Route::post('/buy/submit', [\App\Http\Controllers\MainController::class, 'BSubmit'])
    ->name('BSubmit');

Route::get('/succes', [\App\Http\Controllers\MainController::class, 'succes']);
Route::get('/admin', [\App\Http\Controllers\MainController::class, 'admin']);

Route::post('/admin/product/submit/{product}', [\App\Http\Controllers\MainController::class, 'PRSubmitAdmin'])
    ->name("PRSubmitAdmin");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
