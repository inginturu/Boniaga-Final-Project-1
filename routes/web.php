<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoriesController::class, 'index'])->name('categories');
    
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/contoh', function () {
    return view('halo.index');
});

Route::get('/tentangkami', function () {
    return view('about.tentangkami');
});

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Cache cleared';
});

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    return 'Linked!';
});
