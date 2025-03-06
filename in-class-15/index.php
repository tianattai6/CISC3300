<?php

require 'Controllers/postController.php';

use Controllers\Controllers\postController;

header("Access-Control-Allow-Origin: *");

$requestUri = $_SERVER['REQUEST_URI'];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $requestUri === '/posts') {

    $postController = new postController();

    $posts = $postController -> index();

    // Return posts as JSON
    header('Content-Type: application/json');
    echo json_encode($posts);
}
else {
    // 404 Not Found
    http_response_code(404);
    echo '404 Not Found';
}
