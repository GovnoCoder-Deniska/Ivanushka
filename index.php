<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

include $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
include $_SERVER['DOCUMENT_ROOT'] . '/helpers.php';

use App\Router;
use App\Application;
use App\Controller;

$router = new Router();

$router->get('/', Controller::class . '@index');
$router->get('/books', Controller::class . '@index');
$router->get('/manga', Controller::class . '@manga');
$router->get('/contacts', Controller::class . '@contacts');

$application = new Application($router);
$application->run();
