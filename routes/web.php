<?php

use App\Http\Controllers\{
  IndexController,
  UserController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"])->name("index.index");
Route::get('cadastro', [UserController::class, "create"])->name("users.create");
