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

Route::get('/', 'LaporController@index');
Route::get('/detail/{id}', 'LaporController@detail');
Route::get('/create', 'LaporController@create');
Route::get('/delete/{id}', 'LaporController@delete');

