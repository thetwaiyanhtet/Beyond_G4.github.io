<?php

include "../Model/model.php";
// session_start();
$merchantEmail = $_SESSION["merchant_ID"];

$sql = $pdo->prepare(
    "SELECT m_order_details.quantity,m_order_details.price_per_unit, m_customer.username, m_order.order_date,  m_order.payment_id
    FROM m_order
    JOIN m_order_details ON m_order_details.order_id = m_order.id
    JOIN m_merchant ON m_merchant.id = m_order_details.merchant_id
    JOIN m_customer ON m_customer.id = m_order.customer_id
    WHERE m_merchant.email=:email"
);

$sql->bindValue(":email", $merchantEmail);
$sql->execute();
$ordersreport = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($ordersreport);
