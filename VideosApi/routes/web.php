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

/**
* Route to show videos
*/
$router->get('/videos','VideoController@index');
$router->get('/videos/video','VideoController@username');

$router->post('/videos','VideoController@store');
$router->get('/videos/{video}','VideoController@show');
$router->put('/videos/{video}','VideoController@update');
$router->patch('/videos/{video}','VideoController@update');
$router->delete('/videos/{video}','VideoController@destroy');


/**
* Route for Views
*/
$router->get('/videos1/{video}', 'VideoController@views');
/**
* Route to return views
*/
//$router->get('/', function ()  {
//    return view('video');
//});
