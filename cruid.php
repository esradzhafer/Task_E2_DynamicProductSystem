<?php
include "config.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action == "create_product") {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image_url = $_POST['image_url'];

            $sql = "INSERT INTO products (name, description, price, image_url) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $description, $price, $image_url]);

            echo "Product created successfully.";
        } elseif ($action == "update_product") {
            $product_id = $_POST['product_id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image_url = $_POST['image_url'];

            $sql = "UPDATE products SET name=?, description=?, price=?, image_url=? WHERE product_id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $description, $price, $image_url, $product_id]);

            echo "Product updated successfully.";
        } elseif ($action == "delete_product") {
            $product_id = $_POST['product_id'];

            $sql = "DELETE FROM products WHERE product_id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$product_id]);

            echo "Product deleted successfully.";
        } else {
            echo "Invalid action.";
        }
    } else {
        echo "Action not specified.";
    }
} else {
    echo "Invalid request.";
}

$conn = null;
?>
