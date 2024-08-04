<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Shop routes
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/create', [ShopController::class, 'create']);
Route::post('/shop/store', [ShopController::class, 'store']);
Route::get('/shop/show/{id}', [ShopController::class, 'show']);
