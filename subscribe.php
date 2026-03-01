<?php
// subscribe.php

// --- 1. Database Configuration ---
$dbHost = "localhost";                     
$dbUser = "WPS";                           
$dbPass = "WPSM12!"; 
$dbName = "WPSM";                          

// --- 2. Function to Send JSON Response ---
// A helper function to keep our code clean.
function send_json_response($status, $message) {
    header('Content-Type: application/json');
    http_response_code($status);
    echo json_encode(['message' => $message]);
    exit;
}

// --- 3. Handle the POST Request ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the posted data (decode JSON from JavaScript fetch)
    $data = json_decode(file_get_contents('php://input'), true);
    $email = $data['email'] ?? '';

    // --- 4. Validation ---
    if (empty($email)) {
        send_json_response(400, 'Email address is required.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        send_json_response(400, 'Please enter a valid email address.');
    }

    // --- 5. Connect to the Database ---
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        // Don't show detailed errors to the user in production
        send_json_response(500, 'Server error. Please try again later.');
    }

    // --- 6. Save to Database using Prepared Statements (to prevent SQL injection) ---
    // First, check if the email already exists
    $stmt = $conn->prepare("SELECT email FROM subscribers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        send_json_response(409, 'This email is already subscribed.');
    } else {
        // Email doesn't exist, so insert it
        $stmt_insert = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt_insert->bind_param("s", $email);
        
        if ($stmt_insert->execute()) {
            send_json_response(201, 'Thank you for subscribing!');
        } else {
            send_json_response(500, 'Could not subscribe. Please try again.');
        }
        $stmt_insert->close();
    }

    $stmt->close();
    $conn->close();

} else {
    // If not a POST request, just show an error.
    send_json_response(405, 'Method not allowed.');
}
?>