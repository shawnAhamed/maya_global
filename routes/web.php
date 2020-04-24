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
Route::get('/srv','HomeController@index2');
Route::get('/lang','HomeController@changelanguage');
Route::get('/{ln}','HomeController@languagechagnge_to');

