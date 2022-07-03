<?php
require __DIR__ . '/vendor/autoload.php';
require 'App/Controllers/home_controller.php';
require 'App/Controllers/auth_controller.php';
require 'App/Controllers/post_controller.php';
require 'App/Controllers/comment_controller.php';

$router = new \Bramus\Router\Router();

$router->get('/', function() { PostController::getAll(); });

// login
$router->get('/login', 'AuthController@getLoginPage');
$router->post('/login', 'AuthController@login');

//logout
$router->get('/logout', 'AuthController@logout');

// register
$router->get('/register', 'AuthController@getRegisterPage');
$router->post('/register', 'AuthController@register');


//post
$router->mount('/post', function() use($router){
    $router->get('/create', 'PostController@getCreatePage');

    $router->get('/', 'PostController@getAll');

    $router->post('/', 'PostController@createPost');
});

//comment
$router->mount('/comment', function() use($router) {
    $router->post('/', 'CommentController@createComment');

    $router->get('/(\d+)', 'CommentController@getAll');
});

$router->set404('/api(/.*)?', function() {
    header('HTTP/1.1 404 Not Found');
    header('Content-Type: application/json');

    $jsonArray = array();
    $jsonArray['status'] = "404";
    $jsonArray['status_text'] = "route not defined";

    echo json_encode($jsonArray);
});

$router->run();