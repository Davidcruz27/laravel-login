<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Rutas de Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

//Rutas de Registro
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

//Rutas de Cierre de Sesion
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
