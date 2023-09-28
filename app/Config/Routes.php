<?php

use CodeIgniter\Router\RouteCollection;

/**
* @var RouteCollection $routes
*/
$routes->get( '/', 'Home::index' );

$routes->get('student', 'StudentController::index');
$routes->get('student/add', 'StudentController::add');
$routes->post('student/save', 'StudentController::save');
$routes->get('student/edit/(:num)', 'StudentController::edit/$1');
$routes->post('student/update/(:num)', 'StudentController::update/$1');
$routes->get('student/delete/(:num)', 'StudentController::delete/$1');
$routes->get('student/show/(:num)', 'StudentController::show/$1');