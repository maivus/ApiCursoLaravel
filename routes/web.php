<?php


Route::get('/home', 'HomeController@index');
Route::get('/', function() {
	return view('welcome');
})->middleware('guest');