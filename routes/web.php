<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

// Auth rotues
Route::redirect('/', '/login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginsubmit', [AuthController::class, 'loginsubmit'])->name('loginsubmit');
Route::get('/logout', [AuthController::class, 'logout']);
