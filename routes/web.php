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
//     return view('welcome');
// });

Route::get('/','Homecontroller@index');
Route::get('/trang-chu','Homecontroller@index');

Route::get('/tin-tuc','Homecontroller@index1');
Route::get('/san-pham','Homecontroller@index2');

//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashnoard');
Route::get('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');
