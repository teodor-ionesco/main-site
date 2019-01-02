<?php

Route::get('/', function () {
    return view('index');
});

//Auth::routes();

/*
***** Admin area
*/
Route::get('/a/login', 'Auth\LoginController@index') -> name('login');
Route::post('/a/login', 'Auth\LoginController@login');

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
