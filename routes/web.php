<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::controller(UserController::class)->group(function () {
    Route::post('/register', 'register')->name('registerUser');
    Route::post('/login', 'login')->name('loginUser');
});

// Route::post('/register', [UserController::class,'register'])->name('registerUser');
Route::view('register', 'register')->name('register');
Route::view('login', 'login')->name('login');
Route::view('/', 'pages.home')->name('home');

Route::middleware(['auth','can:isAdmin' ])->group(function () {
    Route::view('/admin-dashbord', 'pages.admin.dashbord')->name('adminDashBord');
});

