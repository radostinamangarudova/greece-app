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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/resorts', 'ResortController@index')->name('resorts.index');
Route::get('/add-resort', 'ResortController@create')->name('resorts.create');
Route::post('/add-resort', 'ResortController@store')->name('resorts.store');

