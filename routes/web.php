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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parser', 'ProductController@parser');
Route::post('/parser', 'ProductController@store');
Route::get('/view', 'ProductController@view')->name('view');

Route::get('show', 'ShowController@show')->name('show');

Route::get('test', 'TestController@index');
