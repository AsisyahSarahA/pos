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
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\ProdukController::class, 'create']);
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index']);
