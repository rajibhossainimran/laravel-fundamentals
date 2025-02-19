<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('customers',[CustomerController::class,'index']);
Route::get('customers/{id}',[CustomerController::class,'show']);
Route::post('addCustomer',[CustomerController::class,'store']);
Route::put('customerUpdate/{id}',[CustomerController::class,'update']);