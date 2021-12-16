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
    $bodytext = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor porta neque id mattis.';
    $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor porta neque id mattis. Integer imperdiet faucibus turpis, ac porttitor urna malesuada eget. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.';
    //$products = [['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'nao-1.jpg', 'name' => 'Nao', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotdog-1.jpg', 'name' => 'Robot dog', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'humanoid-1.jpg', 'name' => 'Humanoid', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'nao-1.jpg', 'name' => 'Nao', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotdog-1.jpg', 'name' => 'Robot dog', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'humanoid-1.jpg', 'name' => 'Humanoid', 'bodytext' => $bodytext, 'description' => $description]];
    $products =[['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description], ['image' => 'robotarm-1.jpg', 'name' => 'Robotarm', 'bodytext' => $bodytext, 'description' => $description]];
    //$products = ['product2' => ['name' => 'Nao', 'description' => $description]];
    return view('catalog', ['products' => $products]);
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

Route::get('/produkt', function () {
    return view('product');
});
