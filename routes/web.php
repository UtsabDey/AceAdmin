<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductTypeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.index');
// });



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class,'index'])->name('/');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/settings', [AdminController::class,'settings'])->name('settings');

    Route::get('get-customers', [CustomerController::class,'getCustomers'])->name('get-customers');

    Route::get('add-customer', [CustomerController::class, 'addCustomer'])->name('add-customer');

    Route::get('edit-customer/{id}', [CustomerController::class, 'editCustomer'])->name('editCustomer');

    Route::patch('edit-customer-submit/{id}', [CustomerController::class, 'update'])->name('update');

    
    Route::get('delete-customer/{id}', [CustomerController::class, 'destroyCustomer'])->name('destroy');
    
    Route::post('add-customer-submit', [CustomerController::class, 'storeCustomer'])->name('add-customer-submit');
    
    Route::get('get-type', [AdminController::class,'getType'])->name('get-type');
    
    Route::get('add-type', [AdminController::class,'addType'])->name('add-type');
    
    Route::post('add-type-submit', [AdminController::class,'storeType'])->name('add-type-submit');
    Route::get('edit-type/{id}', [AdminController::class,'editType'])->name('edit-type');
    
    Route::patch('edit-type-submit/{id}', [AdminController::class, 'updateType'])->name('updateType');

    Route::get('delete-type/{id}', [AdminController::class, 'destroyType'])->name('destroy');

    Route::get('get-product-type', [ProductTypeController::class,'productType'])->name('get-product-type');

    Route::get('get-category', [ProductTypeController::class,'getCategory'])->name('get-category');

    Route::get('get-products', [ProductTypeController::class,'getProduct'])->name('get-products');

    Route::get('add-product', [ProductTypeController::class,'addProduct'])->name('add-product');

    Route::post('add-product-submit', [ProductTypeController::class,'storeProduct'])->name('add-product-submit');

    Route::get('edit-product/{id}', [ProductTypeController::class,'editProduct'])->name('editProduct');

    // Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
