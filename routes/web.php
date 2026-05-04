<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;

// Auth rotues
Route::middleware([CheckIsNotLogged::class])->group(function(){
    Route::redirect('/', '/login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginsubmit', [AuthController::class, 'loginsubmit'])->name('loginsubmit');
});

Route::middleware([CheckIsLogged::class])->group(function() {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/newNote', [MainController::class, 'newNote']);
    Route::get('/logout', [AuthController::class, 'logout']);
});