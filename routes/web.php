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
Route::get('/userprofile', 'UserProfileController@index')->name('beranda');
Route::get('/bantuan', 'BantuanController@index')->name('bantuan');
Route::get('/register/email', 'Auth2\RegisterController2@registerEmail')->name('email');
Route::post('/register/emailStore', 'Auth2\RegisterController2@registerEmailStore')->name('emailstore');
Route::get('/register/name', 'Auth2\RegisterController2@registerName')->name('name');
Route::get('/register/photo', 'Auth2\RegisterController2@registerPhoto')->name('photo');
Route::get('/register/location', 'Auth2\RegisterController2@registerLocation')->name('location');
Route::get('/register/interests', 'Auth2\RegisterController2@registerInterests')->name('interests');
Route::get('/register/roles', 'Auth2\RegisterController2@registerRoles')->name('roles');
Route::get('/register/spotlight', 'Auth2\RegisterController2@registerSpotlight')->name('spotlight');

Route::get('/home', 'PostController@homePage')->name('homepage');

Route::resource('/posts', 'PostController');
