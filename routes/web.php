<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//ini route manual
// $router->get('/jurusan', 'JurusanController@index');
// $router->get('/jurusan/{id}', 'JurusanController@find');
// $router->post('/jurusan', 'JurusanController@create');
// $router->put('/jurusan/{id}', 'JurusanController@update');
// $router->delete('/jurusan/{id}', 'JurusanController@delete');

$router->get('/tugas1', 'TugasController@_1');
$router->get('/tugas2', 'TugasController@_2');
$router->get('/tugas3', 'TugasController@_3');
$router->patch('/tugas5/{id}', 'TugasController@_5');
$router->get('/tugas6', 'TugasController@_6');
$router->get('/tugas7', 'TugasController@_7');

$router->group(['prefix' => '/jurusan'], function() use($router){
    $router->get('/', 'JurusanController@index');
    $router->get('/{id}', 'JurusanController@find');
    $router->post('/', 'JurusanController@create');
    $router->put('/{id}', 'JurusanController@update');
    $router->delete('/{id}', 'JurusanController@delete');
});

$router->group(['prefix' => '/matakuliah'], function() use($router){
    $router->get('/', 'MatakuliahController@index');
    $router->get('/{id}', 'MatakuliahController@find');
    $router->post('/', 'MatakuliahController@create');
    $router->put('/{id}', 'MatakuliahController@update');
    $router->delete('/{id}', 'MatakuliahController@delete');
});

$router->group(['prefix' => '/mahasiswa'], function() use($router){
    $router->get('/', 'MahasiswaController@index');
    $router->get('/{id}', 'MahasiswaController@find');
    $router->post('/', 'MahasiswaController@create');
    $router->put('/{id}', 'MahasiswaController@update');
    $router->delete('/{id}', 'MahasiswaController@delete');
});