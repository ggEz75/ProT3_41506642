<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UsuariosController::index');
$routes->get('/servicios', 'UsuariosController::servicios');
$routes->get('/sobre_nosotros', 'UsuariosController::sobre_nosotros');
$routes->get('/usuarios', 'UsuariosController::usuarios');
//$routes->get('/registro', 'UsuariosController::registro');
$routes->get('/new', 'UsuariosController::new');
$routes->get('/login', 'UsuariosController::login');

$routes->resource('UsuariosController',['placeholder'=>'(:num)','except' => 'show']);

$routes->get('UsuariosController/delete/(:num)', 'UsuariosController::delete/$1');


