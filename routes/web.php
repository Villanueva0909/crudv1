<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::post('/register', [UserController::class, 'register']);

Route::get('/products',[ProductController::class, 'index'])->name( name: 'products.index');