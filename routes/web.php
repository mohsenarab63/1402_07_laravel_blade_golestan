<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
     return 'hello world' ; 
});
Route::get('/login', function () {
     return view('login') ; // rsources/views/login.balde.php 
});
Route::get('/test/show', function () {
     return 'hello world everyone' ; 
});

Route::get('/posts/create', function () {
    return view('create');
});
Route::post('/posts/save', function () {
    dd(request()->all()) ;
});
