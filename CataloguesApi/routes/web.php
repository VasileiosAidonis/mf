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
$router->put('/catalogues/{catalogue}', 'CatalogueController@update');
$router->patch('/catalogues/{catalogue}', 'CatalogueController@update');
$router->delete('/catalogues/{catalogue}', 'CatalogueController@destroy');

/**
* Route for Views
*/
$router->get('/catalogues1/{catalogue}', 'CatalogueController@views');

/**
* router for vue view
*/
//$router->get('/catalogues', function ()  {
//    return view('catalogue');
//});
