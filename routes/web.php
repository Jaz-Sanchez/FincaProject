<?php

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::get('Login', 'Auth\LoginController@login')->name('Login');
Route::post('Login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('Login', 'Auth\RegisterController@showLoginForm')->name('Login');
//Route::post('Login', 'Auth\RegisterController@login');

// Registration Routes...
Route::get('Registro', 'Auth\RegisterController@showRegistrationForm')->name('Registro');
Route::post('Registro', 'Auth\RegisterController@register');

Route::resource('users','UsersController');

Route::resource('fincas','FincasController');

Route::resource('empleados','EmpleadoController');//contiene todas las rutas de crod

Route::resource('marcas','MarcaController');

Route::resource('tipveh','TipvehController');

Route::resource('vehic','VehiculosController');

Route::resource('predio','PrediosController');

Route::resource('clasifi','ClasController');

Route::resource('prod','ProductosController');

Route::resource('clients','ClientesController');

Route::resource('prov','ProveedoresController');



Route::get('empleadoscrod','EmpleadoController@empleadoscrod', function(){

	return view::make('EmpleadoController.empleadoscrod');
});

Route::get('fincascrod','FincasController@fincascrod', function(){

	return view::make('FincasController.fincascrod');
});

Route::get('empleadoscrod', array('as' => 'empleadoscrod', 'uses' => 'EmpleadoController@empleadoscrod'));
Route::get('fincascrod', array('as' => 'fincascrod', 'uses' => 'FincasController@fincascrod'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
