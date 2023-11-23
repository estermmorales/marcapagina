<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Livro::index', ['as' => 'index']);
$routes->post('/add', 'Livro::add', ['as' => 'add']);
$routes->get('/get/(:any)', 'Livro::get_by_id/$1', ['as' => 'get']);
$routes->post('/edit', 'Livro::edit', ['as' => 'edit']);
$routes->post('/delete', 'Livro::delete', ['as' => 'delete']);
