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

Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/store',[CategoryController::class, 'store']);
Route::get('/categories/edit/{id}',[CategoryController::class, 'edit']);
Route::put('/categories/update/{id}',[CategoryController::class, 'update']);
Route::get('/categories/delete/{id}',[CategoryController::class, 'delete']);

Route::get('/customers', [CustomerController::class, 'index']);
