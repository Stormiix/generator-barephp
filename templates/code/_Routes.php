<?php

/**
 * Routing
 */
$router = new <%= project.namespace %>\Core\Router();

// Add the routes
$router->respondWithController('GET', '/[:name]', 'HomeController@index');

// Dispatch the router
$router->dispatch();
