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

Route::get('/portfolio', 'PageController@portfolio')->name('portfolio');
Route::get('/portfolio/commentboard', 'PageController@portfolio_cb')->name('portfolio_cb');
Route::get('/portfolio/personalpage', 'PageController@portfolio_pp')->name('portfolio_pp');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact','ContactController@store');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

