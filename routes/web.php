<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController,
  ProductController
};

Route::get('/', [IndexController::class, "index"])->name("index.index");
Route::get('cadastro', [UserController::class, "index"])->name("users.create");

Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('products.create');
Route::post('/produto', [ProductController::class, 'store'])->name('products.store');
Route::get('/produtos/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produtos/{id}/editar', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::controller(IndexController::class)->group(function(){
    Route::get('/', "index")->name("index.index");
    Route::get('/contact', "contact")->name("index.contact");
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user/login',"login")->name("users.login");
    Route::get('/user/register',"create")->name("users.create");
    Route::post('/user/save', "store")->name("users.store");
});
