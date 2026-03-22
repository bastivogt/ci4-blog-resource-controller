<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "PostsController::index");
$routes->get("/posts/new", "PostsController::new");
$routes->post("/posts/store", "PostsController::store");
$routes->get("/posts/(:num)", "PostsController::show/$1");
$routes->get("/posts/edit/(:num)", "PostsController::edit/$1");
$routes->post("/posts/update/(:num)", "PostsController::update/$1");
$routes->get("/posts/delete/(:num)", "PostsController::deleteConfirm/$1");
$routes->post("/posts/delete/(:num)", "PostsController::delete/$1");


$routes->get("/test", "TestController::index");
$routes->get("/test/(:num)", "TestController::show/$1");
$routes->get("/test/new", "TestController::new");
$routes->post("/test/store", "TestController::store");
$routes->get("/test/edit/(:num)", "TestController::edit/$1");
$routes->post("/test/update/(:num)", "TestController::update/$1");
$routes->get("/test/delete/(:num)", "TestController::deleteConfirm/$1");
$routes->post("/test/delete/(:num)", "TestController::delete/$1");

