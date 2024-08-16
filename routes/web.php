<?php
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('web-home');
Route::get('/cart',[MainController::class,'cart'])->name('web-cart');
Route::get('/shop',[MainController::class,'shop'])->name('web-shop');
Route::get('/single',[MainController::class,'singleProduct'])->name('web-single-product');
Route::get('/checkout',[MainController::class,'checkout'])->name('web-checkout');

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/admin/products',[AdminController::class, 'index']);
