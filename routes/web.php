<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('fincas','FincasController');





Route::get('fincascrod','FincasController@fincascrod', function(){

	return view::make('FincasController.fincascrod');
});

Route::get('fincascrod', array('as' => 'fincascrod', 'uses' => 'FincasController@fincascrod'));