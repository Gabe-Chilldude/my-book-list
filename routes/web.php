<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ? Rotas de login e registro

Route::get('/', [UserController::class, 'showLogin']);

Route::get('/accounts/register', [UserController::class, 'showRegister']);

Route::get('/accounts/new', [UserController::class, 'addAccount']);

