<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/CVistas', 'CVistas::MMostrar1');

$routes->get('/CForms', 'CForms::MMostrar2');

$routes->get('/CResultado', 'CResultado::MMostrar3');