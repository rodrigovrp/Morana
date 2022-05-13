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

$router->group(['prefix' => '/api'], function () use ($router) {
    
    $router->group(['prefix' => 'produtos'], function () use ($router) {

        $router->get('', 'ProdutosController@index');
        $router->post('', 'ProdutosController@store');
        $router->get('{id}', 'ProdutosController@show');
        $router->put('{id}', 'ProdutosController@update');
        $router->delete('{id}', 'ProdutosController@destroy');        

    });

    $router->group(['prefix' => 'pedidos'], function () use ($router) {

        $router->get('', 'PedidosController@index');
        $router->post('', 'PedidosController@store');
        $router->get('{id}', 'PedidosController@show');
        $router->put('{id}', 'PedidosController@update');
        $router->delete('{id}', 'PedidosController@destroy');   
        $router->get('{pedidoId}/items', 'PedidosController@buscaPorItem'); 

    });

    $router->group(['prefix' => 'items'], function () use ($router) {

        $router->get('', 'ItemsController@index');
        $router->post('', 'ItemsController@store');
        $router->get('{id}', 'ItemsController@show');
        $router->put('{id}', 'ItemsController@update');
        $router->delete('{id}', 'ItemsController@destroy');        

    });

});
