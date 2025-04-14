<?php

use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\Route;


Route::get('/',[FileUpload::class,'create']);
Route::post('/',[FileUpload::class,'store'])->name('file.upload');
Route::get('/',[FileUpload::class,'getdata']);