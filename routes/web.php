<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
Route::get('/register', function () {
    return view('welcome');
});

Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});



Route::get('/register', function () {
    return view('register'); // Создайте представление для регистрации
});

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('login'); // Создайте представление для входа
});

Route::post('/login', [LoginController::class, 'login']);
