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

Route::group(['namespace'=>'front'], function () {
	Route::get('/', 'PageController@index');
    Route::get('docs/{version}', 'DocController@index');
    Route::get('docs/{version}/{id}', 'DocController@show');
    Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/{tag}/{id}', 'ArticleController@show');
});

Route::group(['namespace'=>'back', 'middleware'=>'admin'], function () {
	Route::get('dashboard', 'DashboardController@index');
    Route::group(['prefix'=>'back'], function () {
    	Route::get('docs', 'DocController@index');
    	Route::get('docs/{doc}/edit', 'DocController@edit');
    	Route::put('docs/{doc}', 'DocController@update');
    });
});

