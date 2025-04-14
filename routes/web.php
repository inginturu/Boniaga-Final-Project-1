<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/contoh', function () {
    return view('templates.template');
});
Route::get('/us', function () {
    return view('templates.pages.about-us');
});