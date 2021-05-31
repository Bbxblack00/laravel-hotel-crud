<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HotelController@index')
    -> name('home');


Route::get('/employee/{id}', 'HotelController@Employee')
    -> name('employee');


Route::get('/create/worker/', 'HotelController@create')
    -> name('create');

Route::post('/store/worker/', 'HotelController@store')
    -> name('store');