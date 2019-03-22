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

Route::get('/home','HomeController@index')->name('home');
//Route::get('/admin','HomeController@admin')->name('admin');
Auth::routes();

Route::get('/cate/create','CategoriesController@create')->name('cate.create');
Route::get('/cate','CategoriesController@index')->name('cate.index');
Route::get('/cate/{category}','CategoriesController@show')->name('cate.show');
Route::post('/cate','CategoriesController@store')->name('cate.store');
Route::patch('/cate/{category?}','CategoriesController@update')->name('cate.update');
Route::delete('/cate/{category}','CategoriesController@destroy')->name('cate.delete');


Route::get('test',function(){
    return view('test');
});



