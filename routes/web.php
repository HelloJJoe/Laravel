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

Route::get('/posts','PageController@posts')->name('posts');
Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact','ContactController@store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

