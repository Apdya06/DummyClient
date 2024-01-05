<?php
use Illuminate\Http\Request;

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

$router->get('/employee', 'DummyController@getRequestJson');
$router->get('/employee/{id}', 'DummyController@getRequestJsonId');
$router->get('/create', 'DummyController@postRequestJson');
$router->get('/update/{id}', 'DummyController@updateRequestJson');
$router->get('/delete/{id}', 'DummyController@deleteRequestJson');

$router->get('/posts/get-request-xml', 'DummyController@getRequestXml');
$router->get('/posts/post-request-json', 'DummyController@postRequestJson');
$router->get('/posts/post-request-xml', 'DummyController@postRequestXml');


