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

Route::get('/posts',function(){
	return view('post');
})->name('posts');


Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/contact','ContactController@store');

Route::get('/contact', 'ContactController@index')->name('contact');


Route::get('/about', function () {
	$tests = App\Contact::all();
    return view('about', compact('tests'));
})->name('about');





