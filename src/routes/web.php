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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::group(['middleware' => 'auth'], function(){
    Route::get('couponapp/coupon/archive','couponcontroller@archive')->name('archive');
    Route::get('/couponapp','couponcontroller@index')->name('index');
    Route::get('/couponapp/coupon','couponcontroller@show')->name('show');
    Route::get('couponapp/coupon/create','couponcontroller@showCreate')->name('showCreate');
    Route::post('couponapp/coupon/create','couponcontroller@create')->name('create');
    Route::post('couponapp/coupon/delete/{id}', 'couponcontroller@delete')->name('delete');
    Route::get('couponapp/employee','employeecontroller@index')->name('empindex');
    Route::get('couponapp/employee/archive','employeecontroller@archive')->name('emparchive');
    Route::get('couponapp/employee/create', 'employeecontroller@showCreate')->name('empshowCreate');
    Route::post('couponapp/employee/create', 'employeecontroller@create')->name('empcreate');
    Route::get('couponapp/employee/delete/', 'employeecontroller@delete')->name('empdelete');
});

Route::get('couponapp/home', 'HomeController@index')->name('home');
Route::get('logout/', 'Auth\LoginController@logout')->middleware('auth');
