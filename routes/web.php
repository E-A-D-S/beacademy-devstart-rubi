<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController,
  ProductController
};


Route::controller(IndexController::class)->group(function(){
  Route::get('/', "index")->name("index.index");
  Route::get('/contact', "contact")->name("index.contact");
});

Route::controller(ProductController::class)->group(function() {
  Route::get('/produto/novo',  'create')->name('products.create');
  Route::post('/produto/adicionado', 'store')->name('products.store');
  Route::get('/produtos/{id}', 'show')->name('products.show');
  Route::get('/produtos/{id}/editar', 'edit')->name('products.edit');
  Route::put('/produtos/{id}', 'update')->name('products.update');
  Route::delete('/produtos/{id}', 'destroy')->name('products.destroy');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user/entrar',"login")->name("users.login");
    Route::get('/user/registro',"create")->name("users.create");
    Route::post('/user/registrado', "store")->name("users.store");
});
