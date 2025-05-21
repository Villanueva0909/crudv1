<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', function () {
    return "Hello thank you";
});
