<?php
// Allow requests from any domain
header("Access-Control-Allow-Origin: *");

// Parse the request URI
$uri = strtok($_SERVER["REQUEST_URI"], '?');
$uriArray = explode("/", $uri);

// Debugging: Print the URI array
error_log("Request URI: " . $uri); // Log the URI to the server's error log

// Serve the HTML file for the root route
if ($uri === '/' || $uri === '') {
    require 'include.html';
    exit();
}

// Handle the /data route
if ($uriArray[1] === 'data' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = [
        "success" => true,
        "message" => "PHP backend",
        "time" => date("Y-m-d H:i:s")
    ];

    // Return the data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

// Handle the /form route
if ($uriArray[1] === 'form' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode([
        'success' => true,
        'message' => 'Success'
    ]);
    exit();
}

exit();
?>