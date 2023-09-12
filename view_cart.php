<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    
    <?php

    include "config.php";
    function fetchProductDetails($productId, $conn) {
        try {
            $sql = "SELECT name, price FROM products WHERE product_id = :productId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
            $stmt->execute();
    
            // Fetch the product details as an associative array
            $productDetails = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $productDetails;
        } catch (PDOException $e) {
            // Handle database error
            echo "Database Error: " . $e->getMessage();
            return false;
        }
    }
    

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<p>Your shopping cart is empty.</p>";
} else {
    // Fetch and display cart items
    echo "<ul>";
    foreach ($_SESSION['cart'] as $productId) {
        $productDetails = fetchProductDetails($productId, $conn);

        // Check if product details are available
        if ($productDetails) {
            echo "<li>Product Name: " . $productDetails['name'] . "</li>";
            echo "<li>Price: $" . $productDetails['price'] . "</li>";
            echo "<li><a href='remove_from_cart.php?product_id=$productId'>Remove</a></li>"; 
            echo "<hr>";
        } else {
            echo "<li>Product not found.</li>";
        }
    }
    echo "</ul>";
    
    // Provide a button or link to proceed to checkout
    echo "<a href='checkout.php'>Proceed to Checkout</a>";
}


?>

</body>
</html>
