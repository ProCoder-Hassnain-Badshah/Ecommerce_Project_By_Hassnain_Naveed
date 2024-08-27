<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController;

// Admin Routes
Route::get('/admin',[AdminController::class,'index']);
// Route::get('/admin/product/create',[AdminController::class,'create_product']);

// Customer Routes
Route::get('/',[MainController::class,'index'])->name('web-home');
Route::get('/cart',[MainController::class,'cart'])->name('web-cart');
Route::get('/shop',[MainController::class,'shop'])->name('web-shop');
Route::get('/single/(id)',[MainController::class,'singleProduct']);
Route::get('/checkout',[MainController::class,'checkout'])->name('web-checkout');
// Route::get('/abc',[MainController::class,'abc'])->name('web-abc');
Route::get('/addToCart',[MainController::class,'addToCart']);
Route::get('/register',[MainController::class,'register']);

// products create route
// Route::get('/admin/products/create', [ProductController::class, 'create'])->name("admin-products-create");
// Route::get('/admin/products/create', [ProductController::class, 'create'])->name("admin-products-create");
