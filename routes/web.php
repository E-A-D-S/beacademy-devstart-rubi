<?php

use App\Http\Controllers\{
  IndexController,
  UserController,
  ProductController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"])->name("index.index");
Route::get('cadastro', [UserController::class, "index"])->name("users.create");

Route::get('/produtos', [ProductController::class, 'index'])->name('product.index');
Route::post('/produtos/novo', [ProductController::class, 'create'])->name('product.create');
Route::get('/produtos/{id}', [ProductController::class, 'update'])->name('product.update');
Route::put('/produtos/{id}/editar', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('/produtos/{id}', [ProductController::class, 'destroy'])->name('product.destroy');