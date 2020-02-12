<?php

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

//Route::get('admin/permiso','PermisoController@index' );

Route::group(['prefix' => 'admin','namespace' => 'admin'], function () {

    Route::get('permiso','PermisoController@index' )->name('permiso');
    Route::get('permiso/crear','PermisoController@crear' )->name('crear_permiso');
});
