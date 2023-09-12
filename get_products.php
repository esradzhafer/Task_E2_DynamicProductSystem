<?php
include "config.php"; 

try {
    // Retrieve products from the database
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    $products = array(); // Initialize an empty array to store product data

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            // Add each product to the array
            $products[] = $row;
        }
    }

    // Encode the product data in JSON format
    $jsonResponse = json_encode($products);

    // Set the response content type to JSON
    header("Content-Type: application/json");

    // Output the JSON data
    echo $jsonResponse;
} catch (PDOException $e) {
    echo json_encode(array("error" => $e->getMessage()));
}

$conn = null;
?>


