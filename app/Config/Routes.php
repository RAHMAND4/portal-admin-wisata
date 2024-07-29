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
$routes->get('/login', 'AuthController::login'); 
$routes->get('/tour_tables', 'TourController::index', ['filter' => 'auth']); 
$routes->post('/tour/add', 'TourController::add');
$routes->post('/tour/update', 'TourController::update');
$routes->delete('/tour/delete/(:num)', 'TourController::delete/$1');
$routes->get('/api/tour', 'TourController::getTour');
$routes->options('(:any)', function() {
    return '';
});
$routes->get('uploads/(:any)', 'TourController::showImage/$1');