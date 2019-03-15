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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','HomeController@index')->name('home');

Route::get('/cate/create','CategoriesController@create')->name('categories.create');
Route::post('/cate/post','CategoriesController@store')->name('categories.store');
Route::get('/cate/edit','CategoriesController@show')->name('categories.show');
Route::patch('/cate/update','CategoriesController@update')->name('categories.update');
Route::get('/cate/delete','CategoriesController@destroy')->name('delete');

Route::get('test',function(){
    return view('test');
});
