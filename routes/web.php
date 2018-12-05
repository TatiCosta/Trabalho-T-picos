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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::group(['prefix'=>'consultas','where'=>['id'=>'[0-9]+']], function(){
        Route::get('',              ['as'=>'consultas', 'uses'=> 'ConsultasController@index']);
        Route::get('create',        ['as'=>'consultas.create', 'uses'=> 'ConsultasController@create']);
        Route::get('{id}/destroy',  ['as'=>'consultas.destroy', 'uses'=> 'ConsultasController@destroy']);
        Route::get('{id}/edit',     ['as'=>'consultas.edit', 'uses'=> 'ConsultasController@edit']);
        Route::put('{id}/update',   ['as'=>'consultas.update', 'uses'=> 'ConsultasController@update']);
        Route::post('store',        ['as'=>'consultas.store', 'uses'=> 'ConsultasController@store']);

        Route::get('createmaster',  ['as'=>'consultas.createmaster', 'uses'=>'ConsultasController@createmaster']);
        Route::post('masterdetail', ['as'=>'consultas.masterdetail', 'uses'=>'ConsultasController@masterdetail']);
    });

    Route::group(['prefix'=>'especialidades','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'especialidades', 'uses'=> 'EspecialidadesController@index']);
        Route::get('create', ['as'=>'especialidades.create', 'uses'=> 'EspecialidadesController@create']);
        Route::get('{id}/destroy', ['as'=>'especialidades.destroy', 'uses'=> 'EspecialidadesController@destroy']);
        Route::get('{id}/edit', ['as'=>'especialidades.edit', 'uses'=> 'EspecialidadesController@edit']);
        Route::put('{id}/update', ['as'=>'especialidades.update', 'uses'=> 'EspecialidadesController@update']);
        Route::post('store', ['as'=>'especialidades.store', 'uses'=> 'EspecialidadesController@store']);
    });
    
    Route::group(['prefix'=>'atendentes','where'=>['id'=>'[0-9]+']], function(){
        Route::any('', ['as'=>'atendentes', 'uses'=> 'AtendentesController@index']);
        Route::get('create', ['as'=>'atendentes.create', 'uses'=> 'AtendentesController@create']);
        Route::get('{id}/destroy', ['as'=>'atendentes.destroy', 'uses'=> 'AtendentesController@destroy']);
        Route::get('{id}/edit', ['as'=>'atendentes.edit', 'uses'=> 'AtendentesController@edit']);
        Route::put('{id}/update', ['as'=>'atendentes.update', 'uses'=> 'AtendentesController@update']);
        Route::post('store', ['as'=>'atendentes.store', 'uses'=> 'AtendentesController@store']);
    });
    
    Route::group(['prefix'=>'servicos','where'=>['id'=>'[0-9]+']], function(){
        Route::get('', ['as'=>'servicos', 'uses'=> 'ServicosController@index']);
        Route::get('create', ['as'=>'servicos.create', 'uses'=> 'ServicosController@create']);
        Route::get('{id}/destroy', ['as'=>'servicos.destroy', 'uses'=> 'ServicosController@destroy']);
        Route::get('{id}/edit', ['as'=>'servicos.edit', 'uses'=> 'ServicosController@edit']);
        Route::put('{id}/update', ['as'=>'servicos.update', 'uses'=> 'ServicosController@update']);
        Route::post('store', ['as'=>'servicos.store', 'uses'=> 'ServicosController@store']);
    });

    Route::group(['prefix'=>'medicos','where'=>['id'=>'[0-9]+']], function(){
        Route::any('', ['as'=>'medicos', 'uses'=> 'MedicosController@index']);
        Route::get('create', ['as'=>'medicos.create', 'uses'=> 'MedicosController@create']);
        Route::get('{id}/destroy', ['as'=>'medicos.destroy', 'uses'=> 'MedicosController@destroy']);
        Route::get('{id}/edit', ['as'=>'medicos.edit', 'uses'=> 'MedicosController@edit']);
        Route::put('{id}/update', ['as'=>'medicos.update', 'uses'=> 'MedicosController@update']);
        Route::post('store', ['as'=>'medicos.store', 'uses'=> 'MedicosController@store']);
    });
    
    Route::group(['prefix'=>'pacientes','where'=>['id'=>'[0-9]+']], function(){
        Route::any('', ['as'=>'pacientes', 'uses'=> 'PacientesController@index']);
        Route::get('create', ['as'=>'pacientes.create', 'uses'=> 'PacientesController@create']);
        Route::get('{id}/destroy', ['as'=>'pacientes.destroy', 'uses'=> 'PacientesController@destroy']);
        Route::get('{id}/edit', ['as'=>'pacientes.edit', 'uses'=> 'PacientesController@edit']);
        Route::put('{id}/update', ['as'=>'pacientes.update', 'uses'=> 'PacientesController@update']);
        Route::post('store', ['as'=>'pacientes.store', 'uses'=> 'PacientesController@store']);
    });
    
});

