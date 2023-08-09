<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;

Route::get('/', [authController::class, 'index']);