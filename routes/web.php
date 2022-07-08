<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController
};

Route::controller(IndexController::class)->group(function(){
    Route::get('/', "index")->name("index.index");
    Route::get('/contact', "contact")->name("index.contact");
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user/login',"login")->name("users.login");
    Route::get('/user/register',"create")->name("users.create");
    Route::post('/user/save', "store")->name("users.store");
});
