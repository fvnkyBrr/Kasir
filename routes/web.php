<?php

use App\Http\Controllers\AddKategoriController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//product
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/addproduct', [AddProductController::class, 'index'])->name('addproduct');

//kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/addKategori', [AddKategoriController::class, 'index'])->name('addKategori');



// orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders');

//users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/addusers', [AddUserController::class, 'index'])->name('addusers');
