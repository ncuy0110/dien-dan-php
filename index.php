<?php
require __DIR__ . '/vendor/autoload.php';
require 'App/Controllers/home_controller.php';
require 'App/Controllers/auth_controller.php';
require 'App/Controllers/post_controller.php';
require 'App/Controllers/comment_controller.php';

$router = new \Bramus\Router\Router();

$router->get('/', function() { PostController::getAll(); });

// login
$router->get('/login', function() { AuthController::getLoginPage(); });
$router->post('/login', function() { AuthController::login(); });

// register
$router->get('/register', function() { AuthController::getRegisterPage(); });
$router->post('/register', function() { AuthController::register(); });


//post
$router->mount('/post', function() use($router){
    $router->get('/create', function() { 
        PostController::getCreatePage(); 
    });

    $router->get('/', function() {
        PostController::getAll();
    });

    $router->post('/', function() {
        PostController::createPost();
    });
});

//comment
$router->mount('/comment', function() use($router) {
    $router->post('/', function() {
        CommentController::createComment();
    });

    $router->get('/(\d+)', function($postId) {
        CommentController::getAll($postId);
    });
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