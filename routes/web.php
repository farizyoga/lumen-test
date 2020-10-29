<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    $res['success'] = true;
    $res['result'] = "Hello there";
    return response($res);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('users', 'UserController@showAllUsers');

    $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);
});

$router->group(['middleware' => 'auth'], function($router) {
	$router->get('/secure/my-profile', 'SecureController@profile');
});