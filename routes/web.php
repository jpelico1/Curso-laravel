<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/', 'InicioController@index');

Route::get('admin/permiso','Admin\PermisoController@index')->name('permiso');
Route::get('admin/permiso/crear','Admin\PermisoController@create')->name('crear_permiso');

Route::get('admin/menu','Admin\MenuController@index')->name('menu');
Route::get('admin/menu/crear','Admin\MenuController@create')->name('crear_menu');
Route::post('admin/menu','Admin\MenuController@store')->name('guardar_menu');
ROute::post('admin/menu/guardar-orden','Admin\MenuController@guardarOrden')->name('guardar_orden');
Route::get('admin/menu/{id}/editar','Admin\MenuController@edit')->name('editar_menu');
Route::put('admin/menu/{id}','Admin\MenuController@update')->name('actualizar_menu');
Route::get('admin/menu/{id}/eliminar','Admin\MenuController@destroy')->name('eliminar_menu');


Route::get('admin/rol','Admin\RolController@index')->name('rol');
Route::get('admin/rol/crear','Admin\RolController@create')->name('crear_rol');
Route::post('admin/rol','Admin\RolController@store')->name('guardar_rol');
Route::get('admin/rol/{id}/editar','Admin\RolController@edit')->name('editar_rol');
Route::put('admin/rol/{id}','Admin\RolController@update')->name('actualizar_rol');
Route::delete('admin/rol/{id}','Admin\RolController@destroy')->name('eliminar_rol');

Route::get('admin/menu-rol','Admin\MenuRolController@index')->name('menu_rol');
Route::post('admin/menu-rol','Admin\MenuRolController@store')->name('guardar_menu_rol');





