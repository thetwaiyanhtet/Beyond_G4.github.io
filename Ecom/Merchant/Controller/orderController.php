<?php
session_start();

// DB Connection
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
echo $merchantEmail;
$sql = $pdo->prepare(
    "SELECT * 
    FROM m_customer 
    JOIN m_order 
    ON m_customer.id = m_order.customer_id
    JOIN m_merchant 
    ON m_merchant.id = m_order.merchant_id
    WHERE m_merchant.email=:email AND m_order.delivery_status = 0;"
);

$sql->bindValue(":email",$merchantEmail);
$sql->execute(); // real sql run 


$orders = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($orders);
// echo "</pre>";


