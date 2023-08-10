<?php
session_start();
include "../Model/model.php";

if (isset($_POST['generateId']) && !empty($_POST['generateId'])) {
    $generateId = $_POST['generateId'];

    $sql = $pdo->prepare(
        "SELECT * 
            FROM m_order
            JOIN m_customer 
            ON m_customer.id = m_order.customer_id
            WHERE m_order.generate_id = :id"
    );
    $sql->bindValue(":id", $selectedDelivery);

    $sql->execute();

    $deliveryDetail = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($deliveryDetail);
    echo "<pre>";

    // Return the fetched details HTML
    echo $deliveryDetailsHtml;
} else {
    // Handle the case when generateId is not provided
    echo "Invalid request.";
}
