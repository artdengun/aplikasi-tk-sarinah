<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::pmb');
$routes->get('/dashboard', 'Home::index');
$routes->get('login', 'LoginController::index');
$routes->post('authentication', 'LoginController::cek_login');
$routes->get('logout', 'LoginController::logout');


// Routing for users
$routes->get('pendaftaran', 'Home::pendaftaran');
$routes->post('pendaftaran/store', 'TkController::getRegister');

$routes->get('users', 'UsersController::index');
$routes->get('users/create', 'UsersController::create');
$routes->post('users/store', 'UsersController::store');
$routes->post('users/cek_login', 'LoginController::cek_login');
$routes->get('users/edit/(:alphanum)', 'UsersController::edit/$1');
$routes->post('users/update/(:num)', 'UsersController::update/$1');
$routes->get('users/delete/(:alphanum)', 'UsersController::delete/$1');


$routes->get('tk', 'TkController::index');
$routes->get('tk/decision-tree', 'TkController::decision');
$routes->get('tk/pmb', 'TkController::pmb');
$routes->get('tk/create', 'TkController::create');
$routes->post('tk/store', 'TkController::store');
$routes->get('tk/edit/(:alphanum)', 'TkController::edit/$1');
$routes->post('tk/update/(:num)', 'TkController::update/$1');
$routes->get('tk/delete/(:alphanum)', 'TkController::delete/$1');
$routes->get('tk/decision-tree/result/algoritm45/penentuan-kelas','TkController::processAlgoritmaPenentuanKelas');