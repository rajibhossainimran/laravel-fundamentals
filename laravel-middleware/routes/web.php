<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleManage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register',function(){
    return view('register');
});
Route::get('login',function(){
    return view('login');
});


// middleware 
Route::get('admin/dashboard',function(){
    return view('admin');
})->middleware(RoleManage::class);

Route::get('company/dashboard',function(){
    return view('company');
})->middleware(RoleManage::class);

Route::get('customer/dashboard',function(){
    return view('customer');
})->middleware(RoleManage::class);

Route::get('customer/info',function(){
    return view('customerinfo');
})->middleware(RoleManage::class)->name('customer.info');



Route::post('register',[UserController::class,'register'])->name('register');
Route::post('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');
Route::post('create/info',[InfoController::class,'storeInfo'])->name('storeInfo');
Route::get('customer/details',[UserController::class,'showUserDetails'])->name('customer.details');

