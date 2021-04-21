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
  
});

 //Login
$router->post('/login','UsuarioController@usuarioLogin');

//token
$router->post('/info', 'UsuarioController@mostrarToken');
$router->post('logout', 'UsuarioController@usuarioLogout');

//Cadastro dos usuarios
$router->get('/usuarios', 'UsuarioController@usuario'); 

$router->group(['prefix' => 'usuario'], function() use($router){

    $router->post('/cadastrar', 'UsuarioController@cadastrar'); 
    $router->get('/{nivel}', 'UsuarioController@mostrarUsuario'); 
    $router->get('/{id}/atualizar', 'UsuarioController@atualizarUsuario'); 
    $router->put('/{id}/atualizar', 'UsuarioController@atualizarUsuario');
    $router->delete('/{id}/deletar', 'UsuarioController@deletarUsuario');
});



//Cadastro das Maquinas

$router->get('/maquinas', 'MaquinasController@maquinas'); 

$router->group(['prefix' => 'maquinas'], function() use($router){

    $router->post('/cadastrar', 'MaquinasController@cadastrar'); 
    $router->get('/{id}', 'MaquinasController@mostrarMaquinas'); 
    $router->get('/{id}/atualizar', 'MaquinasController@atualizarMaquinas'); 
    $router->put('/{id}/atualizar', 'MaquinasController@atualizarMaquinas');
    $router->delete('/{id}/deletar', 'MaquinasController@deletarMaquinas');
});

//Cadastrar Ordens

$router->get('/ordens', 'OrdemController@ordem'); 

$router->group(['prefix' => 'ordem'], function() use($router){

    $router->post('/cadastrar', 'OrdemController@cadastrar'); 
    $router->get('/{id}', 'OrdemController@mostrarOrdem'); 
    $router->get('/{id}/atualizar', 'OrdemController@atualizarOrdem'); 
    $router->put('/{id}/atualizar', 'OrdemController@atualizarOrdem');
    $router->delete('/{id}/deletar', 'OrdemController@deletarOrdem');
});

