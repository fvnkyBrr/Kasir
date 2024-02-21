<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })
    //     ->middleware(['auth', 'verified'])
    //     ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/add_product', [ProductController::class, 'add_product'])->name('add_product');
    Route::post('/proses_add_product', [ProductController::class, 'proses_add_product'])->name('proses_add_product');
    Route::get('/edit_product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
    Route::put('/proses_edit_product/{id}', [ProductController::class, 'proses_edit_product'])->name('proses_edit_product');
    Route::delete('/delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');

    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/add_kategori', [KategoriController::class, 'add_kategori'])->name('add_kategori');
    Route::post('/proses_add_kategori', [KategoriController::class, 'proses_add_kategori'])->name('proses_add_kategori');
    Route::get('/edit_kategori/{id}', [KategoriController::class, 'edit_kategori'])->name('edit_kategori');
    Route::post('/proses_edit_kategori/{id}', [KategoriController::class, 'proses_edit_kategori'])->name('proses_edit_kategori');
    Route::delete('/delete_kategori/{id}', [KategoriController::class, 'delete_kategori'])->name('delete_kategori');

    // Order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/add_orders', [UserController::class, 'add_orders'])->name('add_orders');

    //Cart
    Route::get('/cart', [OrderController::class, 'index'])->name('cart');
    Route::post('/addToCart', [OrderController::class, 'addToCart'])->name('addToCart');
    Route::get('/removeFromCart', [OrderController::class, 'removeFromCart'])->name('removeFromCart');
    Route::get('/processTransaction', [OrderController::class, 'processTransaction'])->name('processTransaction');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/add_users', [UserController::class, 'add_users'])->name('add_users');
    Route::post('/proses_add_users', [UserController::class, 'proses_add_users'])->name('proses_add_users');
    Route::get('/edit_users/{id}', [UserController::class, 'edit_users'])->name('edit_users');
    Route::put('/proses_edit_users/{id}', [UserController::class, 'proses_edit_users'])->name('proses_edit_users');
    Route::delete('/delete_users/{id}', [UserController::class, 'delete_users'])->name('delete_users');

});

require __DIR__ . '/auth.php';
