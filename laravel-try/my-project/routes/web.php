<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// user route 
Route::get('/user',function(){
    return view('user');
});
