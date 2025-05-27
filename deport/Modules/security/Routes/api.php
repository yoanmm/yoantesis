<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

foreach (['auth:api'] as $mid) 
       Route::group(['prefix'=>'security','middleware' => [$mid]],function () {
               Route::get('/', function (){
                   return ["message"=>"security"];
               });


        /*Log*/
               Route::post('log/validate', 'LogController@validate_model');
               Route::post('log/update_multiple', 'LogController@update_multiple');
               Route::delete('log/delete_by_id', 'LogController@deletebyid');
               Route::resource('log', 'LogController');


        /*Permisos*/
               Route::post('permisos/validate', 'PermisosController@validate_model');
               Route::post('permisos/update_multiple', 'PermisosController@update_multiple');
               Route::delete('permisos/delete_by_id', 'PermisosController@deletebyid');
               Route::resource('permisos', 'PermisosController');


        /*Rol*/
               Route::post('rol/validate', 'RolController@validate_model');
               Route::post('rol/update_multiple', 'RolController@update_multiple');
               Route::delete('rol/delete_by_id', 'RolController@deletebyid');
               Route::resource('rol', 'RolController');


        /*Rol_permiso*/
               Route::post('rol_permiso/validate', 'Rol_permisoController@validate_model');
               Route::post('rol_permiso/update_multiple', 'Rol_permisoController@update_multiple');
               Route::delete('rol_permiso/delete_by_id', 'Rol_permisoController@deletebyid');
               Route::resource('rol_permiso', 'Rol_permisoController');


        /*Usuario_rol*/
               Route::post('usuario_rol/validate', 'Usuario_rolController@validate_model');
               Route::post('usuario_rol/update_multiple', 'Usuario_rolController@update_multiple');
               Route::delete('usuario_rol/delete_by_id', 'Usuario_rolController@deletebyid');
               Route::resource('usuario_rol', 'Usuario_rolController');


        /*Usuarios*/
               Route::post('usuarios/validate', 'UsuariosController@validate_model');
               Route::post('usuarios/update_multiple', 'UsuariosController@update_multiple');
               Route::delete('usuarios/delete_by_id', 'UsuariosController@deletebyid');
               Route::resource('usuarios', 'UsuariosController');


    });
