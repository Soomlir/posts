<?php
require_once __DIR__ . '/src/Controller/PostsController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

switch ($uri) {
  case '/':
    $controller = new PostsController();
    $controller->index();
    break;
  case '/post':
    $controller = new PostsController();
    $controller->post();
    break;
  case '/create':
    $controller = new PostsController();
    $controller->create();
    break;
  default:
    http_response_code(404);
    echo "404 Not Found";
    break;
}
