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

// Route::get('/', function () {
//     return view('Halaman Utama');
// });


// Route::get('/Halaman Lapor', function () {
//     return view('Halaman Lapor');
// });

Route::get('/', 'UtamaController@index');
 

Route::get('/Halaman Lapor', 'PagesController@lapor');
  

