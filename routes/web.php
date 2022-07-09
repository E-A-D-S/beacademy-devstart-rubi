<?php

use App\Http\Controllers\{
  IndexController,
  UserController,
  ProductController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"])->name("index.index");
Route::get('cadastro', [UserController::class, "index"])->name("users.create");

Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('products.create');
Route::post('/produto', [ProductController::class, 'store'])->name('products.store');
Route::get('/produtos/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produtos/{id}/editar', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('products.destroy');