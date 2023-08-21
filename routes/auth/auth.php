<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;

Route::middleware('authorization')->group(function () {
    Route::get('/', [authController::class, 'login'])->name('login');
    Route::get('/login', [authController::class, 'userlogin'])->name('userLogin');  
});


