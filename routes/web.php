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

Route::get('/', 'Auth\LoginController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro_usuarios', 'RegistroUsuariosController@index')->name('registro_usuarios');
Route::get('/roles', 'RolesController@index')->name('roles');
Route::get('/lista_usuarios', 'ListaUsuariosController@index')->name('lista_usuarios');
Route::get('/permisos', 'PermisosController@index')->name('permisos');
Route::post('/roles', 'RolesController@store')->name('roles');
Route::post('/roles_editar', 'RolesController@update')->name('roles_editar');
Route::post('/roles_eliminar', 'RolesController@destroy')->name('roles_eliminar');
Route::get('roleslist', 'RolesController@listing');