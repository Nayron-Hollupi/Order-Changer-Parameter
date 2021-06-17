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
$router->post('/auth','UsuarioController@auth');

//token

$router->post('/logout', 'UsuarioController@usuarioLogout');

//Cadastro dos usuarios


$router->group(['prefix' => 'usuario'], function() use($router){

    $router->get('/mostrar/{id}', 'UsuarioController@usuario');
    $router->get('/session/{usuario}', 'UsuarioController@session');  
    $router->post('/cadastrar', 'UsuarioController@cadastrar'); 
    $router->get('/{Tipo}', 'UsuarioController@mostrarUsuario'); 
    $router->get('/{id}/atualizar', 'UsuarioController@atualizarUsuario'); 
    $router->put('/{id}/atualizar', 'UsuarioController@atualizarUsuario');
    $router->delete('/deletar/{id}', 'UsuarioController@deletarUsuario');
});



//Cadastro das Maquinas
$router->get('/maquina', 'MaquinasController@mostrarMaquina'); 


$router->group(['prefix' => 'maquinas'], function() use($router){

    $router->post('/cadastrar', 'MaquinasController@cadastrar'); 
    $router->get('/mostrar/{Status}', 'MaquinasController@maquinas'); 
    $router->get('/setor/{Setor}', 'MaquinasController@maquinasSetor'); 
    $router->get('/{id}/atualizar', 'MaquinasController@atualizarMaquinas'); 
    $router->put('/{id}/atualizar', 'MaquinasController@atualizarMaquinas');
    $router->delete('/deletar/{id}', 'MaquinasController@deletarMaquinas');
});



//Cadastrar Relatorios

$router->get('/relatorios', 'RelatoriosController@relatorios'); 

$router->group(['prefix' => 'relatorio'], function() use($router){

    $router->post('/cadastrar', 'RelatoriosController@cadastrar'); 
    $router->get('/mostrar/{Status}', 'RelatoriosController@mostrar'); 
    $router->get('/{id}/atualizar', 'RelatoriosController@atualizarRelatorio'); 
    $router->put('/{id}/atualizar', 'RelatoriosController@atualizarRelatorio');
    $router->put('/Status/{id}', 'RelatoriosController@atualizarStatus');
    $router->get('/utilizar/{id}', 'RelatoriosController@UtilizarRelatorio'); 
    
    $router->delete('/deletar/{id}', 'RelatoriosController@deletarRelatorio');
});

