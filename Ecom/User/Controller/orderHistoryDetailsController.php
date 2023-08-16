<?php
session_start();
include "../Model/model.php";
$clickedOrder = $_GET['id'];
$sql = $pdo->prepare(
    "SELECT m_product.p_one,m_product.name,m_product.sellprice,m_product.id AS product_id
    FROM m_order_details
    JOIN m_order
    ON m_order.id = m_order_details.order_id
    JOIN m_product
    ON m_product.id = m_order_details.product_id
    WHERE m_order.generate_id = :clickedOrder;"
);
$sql->bindValue(":clickedOrder",$clickedOrder);
$sql->execute();
$orderDetails = $sql->fetchAll(PDO::FETCH_ASSOC);

?>