<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreManageController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('add_product', [ProductController::class, 'index'])->name('add_product.index');
Route::post('add_product', [ProductController::class, 'store'])->name('add_product.store');

Route::get('add_category', [CategoryController::class, 'index'])->name('add_category.index');
Route::post('add_category', [CategoryController::class, 'store'])->name('add_category.store');

Route::get('store_manage', [HomeController::class, 'view'])->name('store_manage.view');
Route::post('store_manage', [HomeController::class, 'store'])->name('store_manage.store');


Route::get('/cart', function () {
    return view('cart-index');
})->name('cart.view');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout.index');


Route::get('/livewirecounter', function () {
    return view('counter-index');
});







Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');



});



require __DIR__ . '/auth.php';
