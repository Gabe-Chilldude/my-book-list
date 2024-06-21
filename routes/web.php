<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ? Rota da página inicial

Route::get('/', [BookController::class, 'showBooks']) -> middleware('auth');

// ? Rotas de login e registro

Route::get('accounts/login', [UserController::class, 'showLogin']) -> name('login') -> middleware('guest');

Route::get('accounts/logout', [UserController::class, 'logout']);

Route::post('accounts/auth', [UserController::class, 'authAccount']) -> middleware('guest');

Route::get('accounts/register', [UserController::class, 'showRegister']);

Route::post('accounts/new', [UserController::class, 'addAccount']);

// ? Rotas de registro de livro

Route::get('books/register', [BookController::class, 'showBookRegister']) ->middleware('auth');

Route::post('books/new', [BookController::class, 'addBook']) ->middleware('auth');

Route::post('books/delete', [BookController::class, 'removeBook']) ->middleware('auth');