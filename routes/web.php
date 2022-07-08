<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController
};

Route::get('/', [IndexController::class, "index"])->name("index.index");



Route::controller(UserController::class)->group(function(){
    Route::get('/user/login',"login")->name("users.login");
    Route::get('/user/register',"create")->name("users.create");
    Route::post('/user/save', "store")->name("users.store");
});

