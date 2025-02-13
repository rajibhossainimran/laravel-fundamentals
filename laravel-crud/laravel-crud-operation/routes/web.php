<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('category',CategoryController::class);

Route::get('/', function () {
    return view('layout.master');
});
