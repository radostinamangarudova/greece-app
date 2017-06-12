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
Route::get('resorts', 'ResortController@index')->name('resorts.index');
Route::get('add-resort', 'ResortController@create')->name('resorts.create');
Route::post('add-resort', 'ResortController@store')->name('resorts.store');
Route::get('resort/{id}', 'ResortController@show')->name('resorts.show');
Route::delete('resort/{id}', 'ResortController@destroy')->name('resorts.destroy');
Route::get('information', function (){
    return view ('info');
})->name('info');
Route::get('resort/edit/{id}', 'ResortController@edit')->name('resorts.edit');
Route::put('resort/{id}/update', 'ResortController@update')->name('resorts.update');
Route::post('upload-images', 'ResortController@uploadImages');
