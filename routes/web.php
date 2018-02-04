<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('fincas','FincasController');

Route::resource('empleados','EmpleadoController');//contiene todas las rutas de crod

Route::resource('marcas','MarcaController');

Route::resource('tipveh','TipvehController');

Route::resource('vehic','VehiculosController');

Route::resource('predio','PrediosController');

Route::resource('clasifi','ClasController');

Route::resource('prod','ProductosController');

Route::resource('clients','ClientesController');



Route::get('empleadoscrod','EmpleadoController@empleadoscrod', function(){

	return view::make('EmpleadoController.empleadoscrod');
});

Route::get('fincascrod','FincasController@fincascrod', function(){

	return view::make('FincasController.fincascrod');
});

Route::get('empleadoscrod', array('as' => 'empleadoscrod', 'uses' => 'EmpleadoController@empleadoscrod'));
Route::get('fincascrod', array('as' => 'fincascrod', 'uses' => 'FincasController@fincascrod'));