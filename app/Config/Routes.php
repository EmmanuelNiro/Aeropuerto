<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('clientes', 'ClientesController::index');
$routes->get('clientes/agregar', 'ClientesController::agregar');
$routes->post('clientes/editar/(:any)', 'ClientesController::editar/$1');
$routes->get('clientes/eliminar/(:any)', 'ClientesController::eliminar/$1');