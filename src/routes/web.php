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


Route::group(['middleware' => 'owner_auth'], function(){
    Route::get('/couponapp','couponcontroller@index')->name('index');
    Route::get('/couponapp/coupon','couponcontroller@show')->name('show');
    Route::get('couponapp/coupon/archive','couponcontroller@archive')->name('archive');
    Route::get('couponapp/coupon/create','couponcontroller@showCreate')->name('showCreate');
    Route::post('couponapp/coupon/create','couponcontroller@create')->name('create');
    Route::get('couponapp/employee','employeecontroller@index')->name('empindex');
    Route::get('couponapp/employee/archive','employeecontroller@archive')->name('emparchive');

});
Route::get('couponapp/home', 'HomeController@index')->name('home');


Auth::routes();
