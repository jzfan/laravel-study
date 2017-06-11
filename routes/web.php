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
Route::get('hi', function () {
    return view('welcome');
});
Route::group(['namespace'=>'front'], function () {
    Route::get('/', 'PageController@index');
	Route::get('/resources', 'PageController@resources');
    Route::get('docs/{version}', 'DocController@index');
    Route::get('docs/{version}/{id}', 'DocController@show');
    Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/category/{category}/{id}', 'ArticleController@show')->where(['id' => '[0-9]+']);
});

Route::group(['namespace'=>'back', 'middleware'=>'admin'], function () {
	Route::get('dashboard', 'DashboardController@index');
    Route::group(['prefix'=>'back'], function () {
    	Route::get('docs', 'DocController@index');
    	Route::get('docs/{doc}/edit', 'DocController@edit');
        Route::put('docs/{doc}', 'DocController@update');
        
        Route::get('/category/{category}', 'ArticleController@index');
        Route::get('/category/{category}/create', 'ArticleController@create');
        Route::get('/category/{category}/{article}/edit', 'ArticleController@edit');

        Route::post('articles', 'ArticleController@store');
        Route::put('articles/{article}', 'ArticleController@update');
    });
});

Route::get('auth/{service}', 'Auth\SocialiteController@redirectToProvider')->middleware('guest');
Route::get('auth/{service}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::get('test', function () {
    return view('test');
});

Route::post('test', function () {
    dd(request()->all());
});

