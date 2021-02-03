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
});



$router->group(['prefix'=>'/book'], function($router){
    $router->get('/', 'BookController@index');
    $router->get('/{id}', 'BookController@show');
    $router->post('/', 'BookController@store');
    $router->patch('/{id}', 'BookController@update'); 
    $router->delete('/{id}', 'BookController@destroy'); 
});

$router->group(['prefix'=>'/login'], function($router){
    $router->get('/', 'UserController@index');
    $router->get('/{id}', 'UserController@show');
    $router->post('/', 'UserController@store');
    $router->patch('/{id}', 'UserController@update'); 
    $router->delete('/{id}', 'UserController@destroy'); 
});



