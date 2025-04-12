<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::resource('student',StudentController::class);

Route::get('/', function () {
    return view('layout.master');
});
