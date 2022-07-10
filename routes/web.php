<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController,
  ProductController,
  OrderController,
};

Route::controller(IndexController::class)->group(function(){
    Route::get('/', "index")->name("index.index");
    Route::get('/contact', "contact")->name("index.contact");
});

Route::controller(ProductController::class)->group(function() {
  Route::get('/produtos/novo',  'create')->name('products.create');
  Route::post('/produto', 'store')->name('products.store');
  Route::get('/produtos/{id}', 'show')->name('products.show');
  Route::get('/produtos/{id}/editar', 'edit')->name('products.edit');
  Route::put('/produtos/{id}', 'update')->name('products.update');
  Route::delete('/produtos/{id}', 'destroy')->name('products.destroy');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/user/login',"login")->name("users.login");
    Route::get('/user/register',"create")->name("users.create");
    Route::post('/user/registered', "store")->name("users.store");
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
