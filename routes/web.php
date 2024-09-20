<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartItemController;

Route::get('/', function () {
    return view('index');
});

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
Route::get('/delete/{id}',[StoreController::class, 'destroy'])->name('store.destroy');
Route::get('/create',[StoreController::class, 'create'])->name('store.create');
Route::post('/addstore',[StoreController::class, 'store'])->name('store.add');

Route::get('/cart',[CartItemController::class, 'index']);

require __DIR__.'/auth.php';
