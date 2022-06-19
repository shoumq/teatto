<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/category/{category}', [\App\Http\Controllers\MainController::class, 'category']);
Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories']);
Route::get('/product/{product}', [\App\Http\Controllers\MainController::class, 'product']);
