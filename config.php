<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "product_database"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

//Session Management:
session_start([
    'cookie_secure' => true,
    'cookie_httponly' => true,
    'use_strict_mode' => true,
]);

//Error Handling:
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // Log the error securely
    error_log("Error: $errstr in $errfile on line $errline");

    // Display a generic error page
    include 'error.php';
});
?>


