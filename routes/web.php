<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController
};

Route::get('/', [IndexController::class, "index"])->name("index.index");
Route::get('/contact', [IndexController::class, "contact"])->name("index.contact");
Route::get('/user/login', [UserController::class, "login"])->name("users.login");
Route::get('/user/register', [UserController::class, "create"])->name("users.create");