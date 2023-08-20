<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;


Auth::routes();

Route::get('/', [authController::class, 'login'])->name('login');
Route::post('/', [authController::class, 'userlogin'])->name('userLogin');


