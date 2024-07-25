<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->get('/regist_admin', 'RegistAdmin::index'); 
$routes->get('/log_admin', 'AuthController::index');
$routes->get('/dashboard', 'DashboardAdmin::index');
$routes->post('regist_admin/register', 'RegistAdmin::register');
$routes->post('login_admin', 'AuthController::login');