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




Route::get('/','HomeController@index');
Route::get('/en','HomeController@index');
Route::get('expert','HomeController@expert');
Route::get('about','HomeController@aboutus');



Route::get('/bn','BnsiteController@index');
Route::get('bn/expert','BnsiteController@expert');

