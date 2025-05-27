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
       Route::group(['prefix'=>'general','middleware' => [$mid]],function () {
               Route::get('/', function (){
                   return ["message"=>"general"];
               });


        /*Atleta_estado*/
               Route::post('atleta_estado/validate', 'Atleta_estadoController@validate_model');
               Route::post('atleta_estado/update_multiple', 'Atleta_estadoController@update_multiple');
               Route::delete('atleta_estado/delete_by_id', 'Atleta_estadoController@deletebyid');
               Route::resource('atleta_estado', 'Atleta_estadoController');


        /*Atleta_tipo*/
               Route::post('atleta_tipo/validate', 'Atleta_tipoController@validate_model');
               Route::post('atleta_tipo/update_multiple', 'Atleta_tipoController@update_multiple');
               Route::delete('atleta_tipo/delete_by_id', 'Atleta_tipoController@deletebyid');
               Route::resource('atleta_tipo', 'Atleta_tipoController');


        /*Cancha*/
               Route::post('cancha/validate', 'CanchaController@validate_model');
               Route::post('cancha/update_multiple', 'CanchaController@update_multiple');
               Route::delete('cancha/delete_by_id', 'CanchaController@deletebyid');
               Route::resource('cancha', 'CanchaController');


        /*Competencia*/
               Route::post('competencia/validate', 'CompetenciaController@validate_model');
               Route::post('competencia/update_multiple', 'CompetenciaController@update_multiple');
               Route::delete('competencia/delete_by_id', 'CompetenciaController@deletebyid');
               Route::resource('competencia', 'CompetenciaController');


        /*Congresillo_asistencia*/
               Route::post('congresillo_asistencia/validate', 'Congresillo_asistenciaController@validate_model');
               Route::post('congresillo_asistencia/update_multiple', 'Congresillo_asistenciaController@update_multiple');
               Route::delete('congresillo_asistencia/delete_by_id', 'Congresillo_asistenciaController@deletebyid');
               Route::resource('congresillo_asistencia', 'Congresillo_asistenciaController');


        /*Congresillo_deporte*/
               Route::post('congresillo_deporte/validate', 'Congresillo_deporteController@validate_model');
               Route::post('congresillo_deporte/update_multiple', 'Congresillo_deporteController@update_multiple');
               Route::delete('congresillo_deporte/delete_by_id', 'Congresillo_deporteController@deletebyid');
               Route::resource('congresillo_deporte', 'Congresillo_deporteController');


        /*Delegacion*/
               Route::post('delegacion/validate', 'DelegacionController@validate_model');
               Route::post('delegacion/update_multiple', 'DelegacionController@update_multiple');
               Route::delete('delegacion/delete_by_id', 'DelegacionController@deletebyid');
               Route::resource('delegacion', 'DelegacionController');


        /*Delegacion_evento*/
               Route::post('delegacion_evento/validate', 'Delegacion_eventoController@validate_model');
               Route::post('delegacion_evento/update_multiple', 'Delegacion_eventoController@update_multiple');
               Route::delete('delegacion_evento/delete_by_id', 'Delegacion_eventoController@deletebyid');
               Route::resource('delegacion_evento', 'Delegacion_eventoController');


        /*Delegacion_regla*/
               Route::post('delegacion_regla/validate', 'Delegacion_reglaController@validate_model');
               Route::post('delegacion_regla/update_multiple', 'Delegacion_reglaController@update_multiple');
               Route::delete('delegacion_regla/delete_by_id', 'Delegacion_reglaController@deletebyid');
               Route::resource('delegacion_regla', 'Delegacion_reglaController');


        /*Delegacion_tipo*/
               Route::post('delegacion_tipo/validate', 'Delegacion_tipoController@validate_model');
               Route::post('delegacion_tipo/update_multiple', 'Delegacion_tipoController@update_multiple');
               Route::delete('delegacion_tipo/delete_by_id', 'Delegacion_tipoController@deletebyid');
               Route::resource('delegacion_tipo', 'Delegacion_tipoController');


        /*Deporte*/
               Route::post('deporte/validate', 'DeporteController@validate_model');
               Route::post('deporte/update_multiple', 'DeporteController@update_multiple');
               Route::delete('deporte/delete_by_id', 'DeporteController@deletebyid');
               Route::resource('deporte', 'DeporteController');


        /*Deporte_categoria_puntuacion*/
               Route::post('deporte_categoria_puntuacion/validate', 'Deporte_categoria_puntuacionController@validate_model');
               Route::post('deporte_categoria_puntuacion/update_multiple', 'Deporte_categoria_puntuacionController@update_multiple');
               Route::delete('deporte_categoria_puntuacion/delete_by_id', 'Deporte_categoria_puntuacionController@deletebyid');
               Route::resource('deporte_categoria_puntuacion', 'Deporte_categoria_puntuacionController');


        /*Deporte_regla*/
               Route::post('deporte_regla/validate', 'Deporte_reglaController@validate_model');
               Route::post('deporte_regla/update_multiple', 'Deporte_reglaController@update_multiple');
               Route::delete('deporte_regla/delete_by_id', 'Deporte_reglaController@deletebyid');
               Route::resource('deporte_regla', 'Deporte_reglaController');


        /*Equipo*/
               Route::post('equipo/validate', 'EquipoController@validate_model');
               Route::post('equipo/update_multiple', 'EquipoController@update_multiple');
               Route::delete('equipo/delete_by_id', 'EquipoController@deletebyid');
               Route::resource('equipo', 'EquipoController');


        /*Equipo_atleta*/
               Route::post('equipo_atleta/validate', 'Equipo_atletaController@validate_model');
               Route::post('equipo_atleta/update_multiple', 'Equipo_atletaController@update_multiple');
               Route::delete('equipo_atleta/delete_by_id', 'Equipo_atletaController@deletebyid');
               Route::resource('equipo_atleta', 'Equipo_atletaController');


        /*Equipo_estado*/
               Route::post('equipo_estado/validate', 'Equipo_estadoController@validate_model');
               Route::post('equipo_estado/update_multiple', 'Equipo_estadoController@update_multiple');
               Route::delete('equipo_estado/delete_by_id', 'Equipo_estadoController@deletebyid');
               Route::resource('equipo_estado', 'Equipo_estadoController');


        /*Evento_deportivo*/
               Route::post('evento_deportivo/validate', 'Evento_deportivoController@validate_model');
               Route::post('evento_deportivo/update_multiple', 'Evento_deportivoController@update_multiple');
               Route::delete('evento_deportivo/delete_by_id', 'Evento_deportivoController@deletebyid');
               Route::resource('evento_deportivo', 'Evento_deportivoController');


        /*Evento_deportivo_regla*/
               Route::post('evento_deportivo_regla/validate', 'Evento_deportivo_reglaController@validate_model');
               Route::post('evento_deportivo_regla/update_multiple', 'Evento_deportivo_reglaController@update_multiple');
               Route::delete('evento_deportivo_regla/delete_by_id', 'Evento_deportivo_reglaController@deletebyid');
               Route::resource('evento_deportivo_regla', 'Evento_deportivo_reglaController');


        /*Juego*/
               Route::post('juego/validate', 'JuegoController@validate_model');
               Route::post('juego/update_multiple', 'JuegoController@update_multiple');
               Route::delete('juego/delete_by_id', 'JuegoController@deletebyid');
               Route::resource('juego', 'JuegoController');


        /*Juego_delegacion*/
               Route::post('juego_delegacion/validate', 'Juego_delegacionController@validate_model');
               Route::post('juego_delegacion/update_multiple', 'Juego_delegacionController@update_multiple');
               Route::delete('juego_delegacion/delete_by_id', 'Juego_delegacionController@deletebyid');
               Route::resource('juego_delegacion', 'Juego_delegacionController');


        /*Juego_fase*/
               Route::post('juego_fase/validate', 'Juego_faseController@validate_model');
               Route::post('juego_fase/update_multiple', 'Juego_faseController@update_multiple');
               Route::delete('juego_fase/delete_by_id', 'Juego_faseController@deletebyid');
               Route::resource('juego_fase', 'Juego_faseController');


        /*Persona*/
               Route::post('persona/validate', 'PersonaController@validate_model');
               Route::post('persona/update_multiple', 'PersonaController@update_multiple');
               Route::delete('persona/delete_by_id', 'PersonaController@deletebyid');
               Route::resource('persona', 'PersonaController');


        /*Persona_arbitro*/
               Route::post('persona_arbitro/validate', 'Persona_arbitroController@validate_model');
               Route::post('persona_arbitro/update_multiple', 'Persona_arbitroController@update_multiple');
               Route::delete('persona_arbitro/delete_by_id', 'Persona_arbitroController@deletebyid');
               Route::resource('persona_arbitro', 'Persona_arbitroController');


        /*Persona_atleta*/
               Route::post('persona_atleta/validate', 'Persona_atletaController@validate_model');
               Route::post('persona_atleta/update_multiple', 'Persona_atletaController@update_multiple');
               Route::delete('persona_atleta/delete_by_id', 'Persona_atletaController@deletebyid');
               Route::resource('persona_atleta', 'Persona_atletaController');


        /*Reclamacion*/
               Route::post('reclamacion/validate', 'ReclamacionController@validate_model');
               Route::post('reclamacion/update_multiple', 'ReclamacionController@update_multiple');
               Route::delete('reclamacion/delete_by_id', 'ReclamacionController@deletebyid');
               Route::resource('reclamacion', 'ReclamacionController');


        /*Reclamacion_estado*/
               Route::post('reclamacion_estado/validate', 'Reclamacion_estadoController@validate_model');
               Route::post('reclamacion_estado/update_multiple', 'Reclamacion_estadoController@update_multiple');
               Route::delete('reclamacion_estado/delete_by_id', 'Reclamacion_estadoController@deletebyid');
               Route::resource('reclamacion_estado', 'Reclamacion_estadoController');


        /*Sancion*/
               Route::post('sancion/validate', 'SancionController@validate_model');
               Route::post('sancion/update_multiple', 'SancionController@update_multiple');
               Route::delete('sancion/delete_by_id', 'SancionController@deletebyid');
               Route::resource('sancion', 'SancionController');


    });
