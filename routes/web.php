<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class,'loginView'])->middleware('guest');
Route::post('/login', [AuthController::class,'login']);

Route::get('/register', [AuthController::class,'registerView'])->middleware('guest');
Route::post('/register', [AuthController::class,'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('/logout', [AuthController::class,'logout']);
