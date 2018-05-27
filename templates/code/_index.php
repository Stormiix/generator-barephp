<?php

/*
 * <%= project.name %><% if (project.homepage) { -%> (<%= project.homepage %>)<% } -%>.
<% if (project.description) { -%>
 * <%= project.description %>.
<% } -%>
 *
<% if (control.license) { -%>
 * @license <%= project.license %>
<% }
if (project.homepage) { -%>
 * @link <%= project.homepage %>
<% } -%>
 * @author <%= owner.name %><% if (owner.email) { -%> <<%= owner.email %>><% } -%>
 */

declare(strict_types=1);

/**
 * Composer
 */

 require dirname(__DIR__) . '/../vendor/autoload.php';

/**
 * Enviroment setup
 */

use Dotenv\Dotenv;
// Import .env variables and add them the enviroment
$dotenv = new Dotenv(dirname(__DIR__)."/");
$dotenv->load();


/**
 * Logging
 */

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$stream = new StreamHandler(dirname(__DIR__).'/logs/main.log', Logger::DEBUG);
// Create a logger for the debugging-related stuff
$logger = new Logger('debug');
$logger->pushHandler($stream);

/**
 * Error and Exception handling
 */

// Whoops error handling
$whoops = new Whoops\Run();
// Set Whoops as the default error and exception handler used by PHP:
$whoops->register();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());

require_once(dirname(__DIR__).'/App/Routes.php');
