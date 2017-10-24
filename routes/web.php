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

Route::view('/','welcome')->name('welcome');
Route::view('/AL','home.statics.AL')->name('AL');
Route::view('/3D','home.statics.3D')->name('3D');
Route::view('/pubu','home.statics.pubu')->name('pubu');
Route::view('/love_time','home.statics.love_time')->name('love_time');

Auth::routes();

Route::get('/home', 'Home\HomeController@index')->name('home');
/*
|==========================================================================
| Admin Routes start
|==========================================================================
*/
Route::get('/admin','Admin\StaticPagesController@index')->name('admin.index');

Route::get('admin/login','Admin\SessionsController@create')->name('admin.login');
Route::post('admin/login','Admin\SessionsController@store')->name('admin.login');
Route::delete('admin/logout','Admin\SessionsController@destroy')->name('admin.logout');
