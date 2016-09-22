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

Route::match(['get','post'],'/proveedor/desactivo/{id}','ProveedorController@desactivo');
Route::match(['get','post'],'/proveedor/activo/{id}','ProveedorController@activo');
Route::match(['get','post'],'/proveedor/index/{id}','ProveedorController@index');
Route::resource('proveedor', 'ProveedorController');

Route::match(['get','post'],'/categoria/desactivo/{id}','CategoriaController@desactivo');
Route::match(['get','post'],'/categoria/activo/{id}','CategoriaController@activo');
Route::match(['get','post'],'/categoria/index/{id}','CategoriaController@index');
Route::resource('categoria', 'CategoriaController');

Route::match(['get','post'],'/producto/desactivo/{id}','ProductoController@desactivo');
Route::match(['get','post'],'/producto/activo/{id}','ProductoController@activo');
Route::match(['get','post'],'/producto/index/{id}','ProductoController@index');
Route::resource('producto', 'ProductoController');


Route::match(['get','post'],'/presentaciones/desactivo/{id}','PresentacionesController@desactivo');
Route::match(['get','post'],'/presentaciones/activo/{id}','PresentacionesController@activo');
Route::match(['get','post'],'/presentaciones/index/{id}','PresentacionesController@index');
Route::resource('presentaciones', 'PresentacionesController');
