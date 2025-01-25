<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('login'); // Asegúrate de que 'login' sea el nombre de tu vista
})->name('login');

// Ruta para procesar el login
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.process');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('/users', [UserController::class, 'store']);