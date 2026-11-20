<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('portofolio', 'Home::portfolio');
$routes->get('portofolio/(:segment)', 'Home::portfolioProject/$1');
$routes->get('work', 'Home::work');
$routes->get('work/(:segment)', 'Home::workProject/$1');
$routes->get('about', 'Home::about');
