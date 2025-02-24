<?php
// Get the requested path from the URL
$requestUri = $_SERVER['REQUEST_URI'];

// Route the request based on the path
switch ($requestUri) {
    case '/html':
        // Return HTML content
        echo
        '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HTML Page</title>
        </head>
        <body>
            <h1>This is an HTML page.</h1>
            <p>This content is returned as HTML.</p>
        </body>
        </html>';
        break;

    case '/json':
        // Return JSON content
        echo
        json_encode([
            'message' => 'This is a JSON response',
            'status' => 'success',
        ]);
        break;

    default:
        break;
}