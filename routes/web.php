<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductPdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('category/{category}', [HomeController::class, 'category'])->name('category');

Route::get('/products', [HomeController::class,'product'])->name('products');

Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

Route::get('/products/brochure', [ProductPdfController::class, 'generate'])
->name('products.brochure');
