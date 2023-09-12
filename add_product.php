<?php
include "config.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Validate and sanitize data
    if (empty($name) || empty($description) || empty($price)) {
        echo "Please fill in all required fields.";
    } elseif (!filter_var($price, FILTER_VALIDATE_FLOAT)) {
        echo "Invalid price format.";
    } elseif (!filter_var($image_url, FILTER_VALIDATE_URL) && !empty($image_url)) {
        echo "Invalid image URL.";
    } else {
        // Data is valid, insert into the database
        $sql = "INSERT INTO products (name, description, price, image_url) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $description, $price, $image_url]);

        echo "Product added successfully.";
    }
} else {
    // Redirect to the add product form if accessed directly
    header("Location: add_product_form.php");
    exit();
}

$conn = null;
?>
