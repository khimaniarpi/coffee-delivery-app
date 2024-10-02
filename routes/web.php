<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuDetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;


Route::get('/',[IndexController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/stores',[StoreController::class, 'index'])->name('store.index');
Route::get('/stores/{id}',[StoreController::class, 'show'])->name('store.show')->where('id', '[0-9]+');
Route::get('/stores/delete/{id}',[StoreController::class, 'destroy'])->name('store.destroy');
Route::get('/create',[StoreController::class, 'create'])->name('store.create');
Route::post('/addstore',[StoreController::class, 'store'])->name('store.add');
Route::put('/update/{id}',[StoreController::class, 'update'])->name('store.update');
Route::get('/updatestore/{id}',[StoreController::class, 'edit'])->name('store.edit');


Route::get('/checkout',[CheckoutController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/voucher', [VoucherController::class, 'index'])->name('voucher');


Route::get('/menu', [MenuController::class, 'order'])->name('menu');  
Route::get('/ordering/{catId}', [MenuController::class, 'order'])->where('catId', '[0-9]+')->name('menu.index');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/itemdetail/{id}',[MenuDetailController::class, 'index'])->name('menu.detail');

Route::get('/cart',[CartItemController::class, 'index'])->name('cart.index');
Route::get('/addcart',[CartItemController::class, 'store'])->name('cart.add');
Route::get('/cart/{id}',[CartItemController::class, 'update'])->name('cart.update');
Route::get('/delete/{id}',[CartItemController::class, 'destroy'])->name('cart.destroy');

require __DIR__.'/auth.php';
