<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource ('products', ProductController::class);
//route::get('/login', function(){
   // return view('login');
//});//
//route::get('/password', function(){
    return view('password');
//});
//route::get('/register', function(){
    //return view('register');
//});//
//route::get('/tables', function(){
   // return view('tables');
//});//
//route::get('/charts', function(){
    //return view('charts');
//});//
//route::get('/products', function(){
 //   return view('products.products');
//});
