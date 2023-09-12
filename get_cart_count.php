<?php
session_start();

// Get the cart count from the session 
$cartCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

// Return the cart count as JSON
echo json_encode(['count' => $cartCount]);
?>
