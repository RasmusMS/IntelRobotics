<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front');  
});

Route::get('/katalog', function () {
    return view('catalog');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/om-os', function () {
    return view('about');
});

Route::get('/kontakt', function () {
    return view('contact');
});
