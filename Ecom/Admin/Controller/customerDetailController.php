<?php
session_start();

// DB Connection
include "../Model/model.php";

// Check if the customer ID is provided as a parameter in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $customerId = $_GET['id'];

    // Prepare the SQL query to select the customer details using the provided ID
    $sql = $pdo->prepare("SELECT * FROM m_customer WHERE id = :id;");
    $sql->bindValue(":id", $customerId);
    $sql->execute();

    // Fetch the customer details and store them in a variable
    $customerDetail = $sql->fetch(PDO::FETCH_ASSOC);

} else {
    // Handle the case when the customer ID is not provided or empty
    echo "Invalid customer ID!";
}
