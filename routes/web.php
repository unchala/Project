<?php

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

//Route::get('/', function () {
//    return view('master');
//});

Route::get('/','HomeController@index');
Route::get('/create','HomeController@create');
Route::get('/login','HomeController@login');

//Route::get('/cals-{num1}-{num2}', function ($num1,$num2) {
//    return ($num1 + $num2);
//});

//Route::get('/about', function () {
//    return view('about');
//});
//
//Route::get('/play/{num1}/{num2}', function ($num1, $num2) {
//    $data = [
//        'num1' => $num1,
//        'num2' => $num2
//    ];
//
//    return view('play', $data);
//});
//
//Route::get('/contact', function () {
//    return view('contact');
//});

//Route::get('/create', function () {
//    return view('create');
//});
//
//Route::get('/login', function () {
//    return view('login');
//});





