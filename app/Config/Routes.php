<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;

/**
 * @var RouteCollection $routes
 */
$routes->get('pages', [Pages::class, 'index']);
$routes->get('pages/(:segment)', [Pages::class, 'view']);
$routes->get('news', [News::class, 'index']);
$routes->get('news/(:segment)', [News::class, 'show']);
