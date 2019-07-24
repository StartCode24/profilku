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

Auth::routes();

Route::get('/integrasi', 'IntegrasiController@index')->name('home');
Route::get('/', 'BerandaController@index')->name('beranda');
Route::get('/bantuan', 'BantuanController@index')->name('bantuan');

Route::get('/home', 'PostController@homePage')->name('homepage');

Route::resource('/posts', 'PostController');
