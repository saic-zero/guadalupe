<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/','frontController@index');
Route::get('/','loginController@index');
Route::get('index','frontController@index');
Route::get('admin','frontController@admin');
Route::get('w','frontController@w');

Route::match(['get','post'],'/usuario/desactivo/{id}','UsuarioController@desactivo');
Route::match(['get','post'],'/usuario/activo/{id}','UsuarioController@activo');
Route::match(['get','post'],'/usuario/index/{id}','UsuarioController@index');
Route::resource('usuario', 'UsuarioController');

Route::match(['get','post'],'/sucursal/desactivo/{id}','SucursalController@desactivo');
Route::match(['get','post'],'/sucursal/activo/{id}','SucursalController@activo');
Route::match(['get','post'],'/sucursal/index/{id}','SucursalController@index');
Route::resource('sucursal','SucursalController');

Route::match(['get','post'],'/empleado/desactivo/{id}','EmpleadoController@desactivo');
Route::match(['get','post'],'/empleado/activo/{id}','EmpleadoController@activo');
Route::match(['get','post'],'/empleado/index/{id}','EmpleadoController@index');
Route::resource('empleado','EmpleadoController');

Route::match(['get','post'],'/cargo/desactivo/{id}','CargoController@desactivo');
Route::resource('cargo','CargoController');

Route::resource('proveedor', 'ProveedorController');
Route::resource('categoria', 'CategoriaController');
Route::resource('producto', 'ProductoController');
