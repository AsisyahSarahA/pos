<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\cekRole;
use League\CommonMark\Extension\SmartPunct\DashParser;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('produk', ProdukController::class);


    Route::middleware(cekRole::class . 'admin')->group(function () {
        Route::resource('/categories', CategoryController::class);
        Route::resource('/suppliers', SupplierController::class);
        Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    });
    Route::post('/proseslogout', [AuthController::class, 'proseslogout'])->name('proseslogout');
});


Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');

 Route::post('/proseslogin', [AuthController::class, 'proseslogin'])->name('proseslogin');
});
