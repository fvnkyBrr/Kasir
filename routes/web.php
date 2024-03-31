<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\HomeController;
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
    return redirect()->route('login');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
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
    Route::get('/category', [KategoriController::class, 'index'])->name('category');
    Route::get('/add_category', [KategoriController::class, 'add_category'])->name('add_category');
    Route::post('/proses_add_category', [KategoriController::class, 'proses_add_category'])->name('proses_add_category');
    Route::get('/edit_category/{id}', [KategoriController::class, 'edit_category'])->name('edit_category');
    Route::put('/proses_edit_category/{id}', [KategoriController::class, 'proses_edit_category'])->name('proses_edit_category');
    Route::delete('/delete_category/{id}', [KategoriController::class, 'delete_category'])->name('delete_category');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/add_user', [UserController::class, 'add_user'])->name('add_user');
    Route::post('/proses_add_user', [UserController::class, 'proses_add_user'])->name('proses_add_user');
    Route::get('/edit_user/{id}', [UserController::class, 'edit_user'])->name('edit_user');
    Route::put('/proses_edit_user/{id}', [UserController::class, 'proses_edit_user'])->name('proses_edit_user');
    Route::delete('/delete_user/{id}', [UserController::class, 'delete_user'])->name('delete_user');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::post('', [OrderController::class, 'store'])->name('add_to_cart');
    Route::post('/transaksi', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('orders/plus/{id}', [OrderController::class, 'plus'])->name('plus');
    Route::get('orders/minus/{id}', [OrderController::class, 'minus'])->name('minus');
    Route::get('/destroy/{id}', [OrderController::class, 'destroy'])->name('destroy');

    //Detail Order
    // Route::get('/detail_order/{id}', [OrderController::class, 'detail_order'])->name('detail_order');
    Route::get('/detail_order', [DetailOrderController::class, 'index'])->name('detail_order');
});

require __DIR__ . '/auth.php';
