<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/contoh', function () {
    return view('templates.template');
});

Route::get('/', [CategoriesController::class, 'index'])->name('categories');
// Route::get('/us', function () {
//     return view('templates.pages.about-us');
// });

Route::get('/products', function(){
    return view('products.index');
});

Route::get('/contoh', function (){
    return view('halo.index');
});
Route::get('/contoh2', function (){
    return view('halo.contoh2');
});
Route::get('/contoh3', function (){
    return view('halo.contoh3');
});