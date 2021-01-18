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

$router->group(['prefix' => 'api', 'namespace' => 'Api'], function() use ($router) {

    $router->group(['prefix' => 'v1', 'namespace' => 'V1'], function() use ($router) {
        $router->get('get_track/{obj}', 'TrackerController@get_track');
    });
});
