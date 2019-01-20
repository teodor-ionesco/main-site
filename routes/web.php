<?php

Route::get('/', 'Index@index');
Route::get('/contact', 'Contact@index');
//Auth::routes();

/*
***** Admin area
*/
Route::middleware('CheckRegKey') -> get('/a/register/{key?}', 'Auth\RegisterController@showRegistrationForm') -> name('register');
Route::middleware('CheckRegKey') -> post('/a/register/{key?}', 'Auth\RegisterController@register');

Route::get('/a/login', 'Auth\LoginController@showLoginForm') -> name('login');
Route::post('/a/login', 'Auth\LoginController@login');

Route::get('/a/logout', 'Auth\LoginController@logout');

/*
***
*/
Route::prefix('/admin') -> middleware('auth') -> group(function()
{
	Route::get('/', 'Admin\Index@index');
	Route::get('/dashboard', 'Admin\Dashboard@index');

	Route::prefix('contact') -> group(function()
	{
		Route::get('/', 'Admin\Contact@index');
		Route::patch('/', 'Admin\Contact@update');
	});
});
