<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produk', ProdukController::class);

Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::resource('categories', CategoryController::class);
Route::resource('produk', ProdukController::class);
Route::resource('suppliers', SupplierController::class);

Route::get('/customers', [CustomerController::class, 'index']);
