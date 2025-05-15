<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoriesController::class, 'index'])->name('categories');
    
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


// Route::get('/contoh', function () {
//     return view('halo.index');
// });

Route::get('/about-us', function () {
    return view('about.show');
});