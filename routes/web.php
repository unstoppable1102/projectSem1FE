<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('home.about');
Route::get('/blogs', [HomeController::class, 'blog'])->name('home.blogs');
Route::get('/blog-detail', [HomeController::class, 'blogDetail'])->name('home.blog-detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/my-account', [HomeController::class, 'myAccount'])->name('home.myAccount');
Route::get('/wishlist', [HomeController::class, 'wishList'])->name('home.wishlist');
Route::get('/cart', [HomeController::class, 'cart'])->name('home.cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('home.checkout');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('home.privacy-policy');
Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('home.terms-of-service');
Route::get('/sign-up', [HomeController::class, 'signUp'])->name('home.sign-up');
Route::get('/sign-in', [HomeController::class, 'signIn'])->name('home.sign-in');

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::get('/product-detail', [ProductController::class, 'detail'])->name('product.detail');
