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
Route::get('/corona','HomeController@corona');
Route::get('/services','HomeController@services');
Route::get('/expert','HomeController@expert');
Route::get('/about','HomeController@aboutus');
Route::get('/test','HomeController@test');




Route::get('/EN','HomeController@index');
Route::get('/EN/corona','HomeController@corona');
Route::get('/EN/services','HomeController@services');
Route::get('/EN/about','HomeController@aboutus');
Route::get('/EN/expert','HomeController@expert');



Route::get('/bn','BnsiteController@index');
Route::get('/bn/corona','BnsiteController@corona');
Route::get('/bn/services','BnsiteController@services');
Route::get('/bn/about','BnsiteController@about');
Route::get('/bn/expert','BnsiteController@expert');

