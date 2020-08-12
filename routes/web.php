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

$router->get("/api/cars", "CarsController@getAll");

$router->get("/api/car/{id}", "CarsController@get");
$router->post("/api/car", "CarsController@store");
$router->put("/api/car/{id}", "CarsController@update");
$router->delete("/api/car/{id}", "CarsController@destroy");

$router->get('/', function () use ($router) {
    return $router->app->version();
});
