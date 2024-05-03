<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home',[HomeController::class]);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'handleLogin'])->name('login.submit');



