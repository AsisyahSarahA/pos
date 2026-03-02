<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get ('/products', function () {
//     return view('products.index');
// });
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])-> name('produk.edit');
Route::put('/produk/update/{id}',[ProdukController::class, 'update'])->name('produk.update');
Route::get('/produk/delete/{id}',[ProdukController::class, 'delete']);
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::delete('/produk/delete/{id}',[ProdukController::class, 'destroy'])->name('produk.destroy');

Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store',[CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}',[CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}',[CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/delete/{id}',[CategoryController::class, 'delete']);
Route::delete('/categories/delete/{id}',[CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/customers', [CustomerController::class, 'index']);
