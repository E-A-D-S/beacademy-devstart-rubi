<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController,
  AccountController,
  ProductController,
  OrderController,
};

Route::controller(IndexController::class)->group(function(){
    Route::get('/', "index")->name("index.index");
    Route::get('/contato', "contact")->name("index.contact");
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user/entrar',"login")->name("users.login");
    Route::get('/user/registro',"create")->name("users.create");
    Route::get('/user/recuperarsenha',"recovery")->name("users.recovery");
    Route::post('/user/registrado', "store")->name("users.store");
    Route::post('/user',"auth")->name("users.auth");
});

Route::controller(AccountController::class)->group(function (){
  Route::get("/dashboard", "index")->name("account.index")->middleware('auth');
  Route::get("/user/sair", "logout")->name("account.logout")->middleware('auth');
});

Route::controller(ProductController::class)->group(function() {
  Route::get('/produto/novo',  'create')->name('products.create')->middleware('auth', 'CheckIsAdmin');
  Route::post('/produto/adicionado', 'store')->name('products.store')->middleware('auth', 'CheckIsAdmin');
  Route::get('/produto/{id}', 'show')->name('products.show')->middleware('auth', 'CheckIsAdmin');
  Route::get('/produto/{id}/editar', 'edit')->name('products.edit')->middleware('auth', 'CheckIsAdmin');
  Route::put('/produto/{id}', 'update')->name('products.update');
  Route::delete('/produto/{id}', 'destroy')->name('products.destroy');
});

Route::controller(OrderController::class)->group(function(){
    Route::get('/order/index', "index")->name("orders.index");
    Route::get('/order/register', "create")->name("orders.create");
    Route::post('/order/save', "store")->name("orders.store");
    Route::get('/order/{id}', 'show')->name('orders.show');
    Route::get('/order/{id}/edit', "edit")->name("orders.edit");
    Route::put('/order/{id}', "update")->name("orders.update");
    Route::delete('/order/{id}', "destroy")->name("orders.destroy");
});
