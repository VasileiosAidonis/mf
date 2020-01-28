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

$router->get('/catalogues', 'CatalogueController@index');
$router->post('/catalogues', 'CatalogueController@store');
$router->get('/catalogues/{catalogue}', 'CatalogueController@show');
$router->patch('/catalogues/{catalogue}', 'CatalogueController@update');
$router->delete('/catalogues/{catalogue}', 'CatalogueController@destroy');

/**
* Route for Views
*/
$router->get('/catalogues1/{catalogue}', 'CatalogueController@views');
//Thumbnails
$router->post('/catalogues1/{catalogue}/{thumb}', [
  'as' => 'catalogues_thumb', 'uses' => 'CatalogueController@update_thumb'
]);
