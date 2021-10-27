<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;




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
//     return view('welcome');
// });
// Route::get('/brand/getwe', [BrandController::class,'getwe']);
// Route::get('/product/getPro', [ProductController::class,'getPro']);

// brand routes
Route::get('/brand/index', [BrandController::class,'index'])->name('brand.index');
Route::get('/brand/create', [BrandController::class,'create'])->name('brand.create');
Route::get('/brand/edit/{id}', [BrandController::class,'edit'])->name('brand.edit');
Route::get('/brand/show/{id}', [BrandController::class,'show'])->name('brand.show');
Route::post('/brand/store', [BrandController::class,'store'])->name('brand.store');
Route::patch('/brand/update/{id}', [BrandController::class,'update'])->name('brand.update');
Route::delete('/brand/delete/{id}', [BrandController::class,'destroy'])->name('brand.destroy');



// category routes
Route::get('/category/index', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
Route::get('/category/show/{id}', [CategoryController::class,'show'])->name('category.show');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
Route::patch('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');



// supplier routes
Route::get('/supplier/index', [SupplierController::class,'index'])->name('supplier.index');
Route::get('/supplier/create', [SupplierController::class,'create'])->name('supplier.create');
Route::get('/supplier/edit/{id}', [SupplierController::class,'edit'])->name('supplier.edit');
Route::get('/supplier/show/{id}', [SupplierController::class,'show'])->name('supplier.show');
Route::post('/supplier/store', [SupplierController::class,'store'])->name('supplier.store');
Route::patch('/supplier/update/{id}', [SupplierController::class,'update'])->name('supplier.update');
Route::delete('/supplier/delete/{id}', [SupplierController::class,'destroy'])->name('supplier.destroy');


// product routes
Route::get('/product/index', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::get('/product/show/{id}', [ProductController::class,'show'])->name('product.show');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::patch('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
Route::delete('/product/delete/{id}', [ProductController::class,'destroy'])->name('product.destroy');


