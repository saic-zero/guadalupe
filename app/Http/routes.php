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

Route::match(['get','post'],'/vendedor/desactivo/{id}','VendedorController@desactivo');
Route::match(['get','post'],'/vendedor/activo/{id}','VendedorController@activo');
Route::match(['get','post'],'/vendedor/index/{id}','VendedorController@index');
Route::resource('vendedor', 'VendedorController');

Route::match(['get','post'],'/categoria/desactivo/{id}','CategoriaController@desactivo');
Route::match(['get','post'],'/categoria/activo/{id}','CategoriaController@activo');
Route::match(['get','post'],'/categoria/index/{id}','CategoriaController@index');
Route::resource('categoria', 'CategoriaController');

Route::match(['get','post'],'/producto/desactivo/{id}','ProductoController@desactivo');
Route::match(['get','post'],'/producto/activo/{id}','ProductoController@activo');
Route::match(['get','post'],'/darAltaProductos/{id}','ProductoController@darAlta');
Route::match(['get','post'],'/producto/index/{id}','ProductoController@index');
Route::match(['get','post'],'/producto/show/{id}','ProductoController@show');
Route::match(['get','post'],'/producto/ver/{id}','ProductoController@ver');
Route::resource('producto', 'ProductoController');


Route::resource('presentaciones', 'PresentacionesController');
Route::match(['get','post'],'/presentaciones/desactivo/{producto}','PresentacionesController@desactivo');
Route::match(['get','post'],'/presentaciones/activo/{producto}','PresentacionesController@activo');
Route::match(['get','post'],'/presentaciones/todos/{producto}','PresentacionesController@todos');
Route::match(['get','post'],'/presentaciones/todosAtras/{producto}','PresentacionesController@todosAtras');
Route::match(['get','post'],'/presentaciones/index/{id}','PresentacionesController@index');
Route::match(['get','post'],'/darAltaPresentacion/{id}','PresentacionesController@darAlta');
Route::get('presentaciones/crear/{producto}','PresentacionesController@crear');
Route::match(['get','post'],'/guardarPresentaciones/{id}','PresentacionesController@guardar');

