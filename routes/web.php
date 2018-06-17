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


$router->group(['prefix' => 'api'], function () use ($router) {
    /** USUARIOS */
    $router->get('usuarios', [
        'uses' => 'UsuarioController@index'
    ]);

    $router->get('usuario/{user_id}', [
        'uses' => 'UsuarioController@findUserById'
    ]);

    /** PLATOS */
    $router->get('platos', [
        'uses' => 'PlatoController@index'
    ]);

    $router->get('platos/{categoria_id}', [
        'uses' => 'PlatoController@findPlatosByCategoria'
    ]);

    $router->get('plato/{plato_id}', [
        'uses' => 'PlatoController@findPlatoById'
    ]);
});