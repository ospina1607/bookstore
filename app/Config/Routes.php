<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/', 'Login::index');
$routes->post('/vlogin', 'Login::verifyLogin');
$routes->get('/users', 'Users::index');
$routes->post('/users/register', 'Users::register');
$routes->get('/books', 'Books::index');
$routes->get('/newbook', 'NewBook::index');
$routes->post('/registerb', 'NewBook::register');
$routes->post('reserves/create/(:num)/(:any)', 'Reserve::create/$1/$2');
$routes->get('reserves/delete/(:num)/(:any)', 'Reserve::delete/$1/$2');
$routes->get('/myreserves', 'Reserve::index');
$routes->get('/logout', 'Login::logout');
