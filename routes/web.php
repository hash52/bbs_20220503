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

Route::get('/', 'ThreadController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'threads', 'middleware'=>'auth'], function () {
    Route::get('new', 'ThreadController@add');
    Route::post('/', 'ThreadController@create');
    Route::get('/show', 'ThreadController@show');
    Route::post('/show', 'PostController@create');
});
