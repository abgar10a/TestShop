<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

// register
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'register']);

//login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login']);

//logout
Route::get('/logout', function () {
    return view('home');
})->name('/');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/account', function () {
    return view('account');
})->name('account');
