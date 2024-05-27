<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IncomeController;;
use App\Http\Controllers\OutcomeController;;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/about', [IndexController::class, 'about'])->name('about');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/product', [IndexController::class, 'product'])->name('product');
    Route::get('/product-detail/{id}', [IndexController::class, 'product_details'])->name('product_details');
});

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::middleware('isadmin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin_index');
        Route::get('/add-product', [AdminController::class, 'add_product'])->name('add_product');
        Route::get('/list-product', [AdminController::class, 'list_product'])->name('list_product');
        Route::get('/edit-product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
        Route::get('/contacts', [AdminController::class, 'list_contact'])->name('list_contact');
        Route::get('/add-income', [AdminController::class, 'add_income'])->name('add_income');
        Route::get('/add-outcome', [AdminController::class, 'add_outcome'])->name('add_outcome');
        // Route::get('/profit-analyst', [AdminController::class, 'profit_analyst'])->name('profit_analyst');
        Route::get('/list-income', [AdminController::class, 'list_income'])->name('list_income');
        Route::get('/list-outcome', [AdminController::class, 'list_outcome'])->name('list_outcome');
    });
});

Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthController::class, 'auth_login'])->name('auth_login');
    Route::get('/logout', [AuthController::class, 'auth_logout'])->name('auth_logout');
});

Route::prefix('/api')->group(function () {
    Route::post('/store-contact', [ContactController::class, 'store'])->name('store_contact');

    Route::middleware('isadmin')->group(function () {
        Route::post('/store-product', [ProductsController::class, 'store'])->name('store_product');
        Route::post('/update-product/{id}', [ProductsController::class, 'update'])->name('update_product'); // Mengubah POST menjadi PUT
        Route::get('/destroy-product/{id}', [ProductsController::class, 'destroy'])->name('destroy_product'); // Mengubah POST menjadi PUT
        Route::get('/destroy-contact/{id}', [ContactController::class, 'destroy'])->name('destroy_contact'); // Mengubah POST menjadi PUT
        
        Route::post('/store-income', [IncomeController::class, 'store'])->name('store_income');
        Route::get('/destroy-income/{id}', [IncomeController::class, 'destroy'])->name('destroy_income');
        Route::post('/store-outcome', [OutcomeController::class, 'store'])->name('store_outcome');
    });

});



