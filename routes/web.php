<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalesController;
use App\Http\Middleware\cekRole;

use League\CommonMark\Extension\SmartPunct\DashParser;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware(cekRole::class . ':admin')->group(function () {
        Route::get('/dashboard/dashboard-admin', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('/categories', CategoryController::class);
        Route::resource('/suppliers', SupplierController::class);
        Route::resource('/customers', CustomerController::class);
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
        Route::resource('produk', ProdukController::class);
        Route::get('/sales', [SalesController::class, 'index'])->name('sales');
        Route::get('/sales/create', [SalesController::class, 'create'])->name('sales.create');
    });
    Route::post('/proseslogout', [AuthController::class, 'proseslogout'])->name('proseslogout');
});


Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');

    Route::post('/proseslogin', [AuthController::class, 'proseslogin'])->name('proseslogin');
});
