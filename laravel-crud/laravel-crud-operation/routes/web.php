<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);

Route::get('/', function () {
    return view('layout.master');
});
