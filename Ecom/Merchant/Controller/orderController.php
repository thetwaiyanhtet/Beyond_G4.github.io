<?php
session_start();
// DB Connection
include "../Model/model.php";
$merchantEmail = $_SESSION["merchant_ID"];

$sql = $pdo->prepare(
    "SELECT *
    FROM m_order 
    JOIN m_customer 
    ON m_customer.id = m_order.customer_id
    JOIN m_merchant 
    ON m_merchant.id = m_order.merchant_id
    WHERE m_merchant.email=:email;"
);

$sql->bindValue(":email",$merchantEmail);
$sql->execute(); // real sql run 


$orders = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($orders);
// echo "</pre>";


