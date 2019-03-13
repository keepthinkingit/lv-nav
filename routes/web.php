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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home','HomeController@index')->name('home');
Route::get('create','NavsController@create')->name('create');
Route::post('post','NavsControlle@store')->name('store');
Route::get('edit','NavsController@show')->name('edit');
Route::patch('update','NavsController@update')->name('update');
Route::get('delete','NavsController@destroy')->name('delete');

Route::get('test',function(){
    return view('test');
});
