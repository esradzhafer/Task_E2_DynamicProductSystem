<?php
session_start();

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Add the product to the cart 
    $_SESSION['cart'][] = $productId;

    // Return a success message
    $response = [
        'success' => true,
        'message' => 'Product added to cart successfully.',
    ];
} else {
    // Return an error message if no product_id is provided
    $response = [
        'success' => false,
        'message' => 'Invalid product ID.',
    ];
}

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
