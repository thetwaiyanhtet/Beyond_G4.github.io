<?php
session_start();
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
$searchName = $_POST["searchText"];

$sql =  $pdo->prepare(
    "SELECT m_order.generate_id,m_customer.username,m_order.order_date,m_order.payment_status,m_order.payment_id 
    FROM m_customer 
    JOIN m_order 
    ON m_customer.id = m_order.customer_id
    JOIN m_merchant 
    ON m_merchant.id = m_order.merchant_id
    WHERE m_merchant.email=:email
    AND m_order.delivery_status = 0
    AND m_order.generate_id LIKE :search;
    "
);


$sql->bindValue(":search",'%'.$searchName.'%');
$sql->bindValue(":email", $merchantEmail);
$sql->execute();

$orders = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($orders);

