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

$router->get('/logins','LoginController@index');
$router->post('/logins', 'LoginController@store');
$router->get('/logins/{login}', 'LoginController@show');
$router->put('/logins/{login}', 'LoginController@update');
$router->patch('/logins/{login}', 'LoginController@update');
$router->delete('/logins/{login}', 'LoginController@destroy');

$router->get('/registers', 'RegisterController@index');
// Create the data
$router->get('/registers/create', 'RegisterController@create');
$router->post('/registers', 'RegisterController@store');
$router->get('/registers/{register}', 'RegisterController@show');
$router->put('/registers/{register}', 'RegisterController@update');
$router->patch('/registers/{register}', 'RegisterController@update');
$router->delete('/registers/{register}', 'RegisterController@destroy');


/**
* Routes for Views
*/
$router->get('/logins1', [
      'as' => 'logins', 'uses' => 'LoginController@views'
]);
$router->get('/registers1', [
      'as' => 'registers', 'uses' => 'RegisterController@views'
]);
