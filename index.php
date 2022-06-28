<?php
require __DIR__ . '/vendor/autoload.php';
require 'App/Controllers/home_controller.php';
require 'App/Controllers/auth_controller.php';

$router = new \Bramus\Router\Router();

$router->get('/', function() { HomeController::get(); });

// login
$router->get('/login', function() { AuthController::getLoginPage(); });
$router->post('/login', function() { AuthController::login(); });

// register
$router->get('/register', function() { AuthController::getRegisterPage(); });
$router->post('/register', function() { AuthController::register(); });
$router->run();