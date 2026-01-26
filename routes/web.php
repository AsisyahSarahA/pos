<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get ('/products', function () {
//     return view('products.index');
// });
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
    