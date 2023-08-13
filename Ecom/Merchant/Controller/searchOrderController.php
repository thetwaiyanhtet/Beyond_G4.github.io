<?php
session_start();
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
$searchName = $_POST["searchText"];

$sql =  $pdo->prepare(
    "SELECT m_order.generate_id,m_customer.username,m_order.order_date,m_order.payment_status,m_order.payment_id
    FROM m_order
    JOIN m_order_details
    ON m_order_details.order_id = m_order.id
    JOIN m_merchant
    ON m_merchant.id = m_order_details.merchant_id
    JOIN m_customer
    ON m_customer.id = m_order.customer_id
    WHERE m_merchant.email=:email AND m_order_details.delivery_status = 0
    AND m_order.generate_id LIKE :search
    GROUP BY m_order.generate_id
    ORDER BY m_order.id DESC;
    "
);


$sql->bindValue(":search",'%'.$searchName.'%');
$sql->bindValue(":email", $merchantEmail);
$sql->execute();

$orders = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($orders);

