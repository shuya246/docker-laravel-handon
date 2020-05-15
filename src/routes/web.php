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



Route::get('/couponapp','couponcontroller@index')->name('coupon.index');
Route::get('/couponapp/coupon','couponcontroller@show')->name('show');
Route::get('couponapp/coupon/archive','couponcontroller@archive')->name('archive');
Route::get('couponapp/coupon/create','couponcontroller@create')->name('create');
Route::post('couponapp/coupon/create','couponcontroller@post');
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
