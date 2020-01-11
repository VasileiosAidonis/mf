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

$router->get('/billings', 'BillingController@index');

// Create the data
$router->get('/billings/create', [
    'as' => 'billings', 'uses' => 'BillingController@create'
]);
$router->post('/billings', 'BillingController@store');
$router->get('/billings/{billing}', 'BillingController@show');
$router->put('/billings/{billing}', 'BillingController@update');
$router->patch('/billings/{billing}', 'BillingController@update');
$router->delete('/billings/{billing}', 'BillingController@destroy');

/**
* Route for Views
*/
$router->get('/billings1', 'BillingController@views');

//$router->get('/billing1', function ()  {
//    return view('billing');
//});
