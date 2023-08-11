<?php
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
// echo $merchantEmail;

// Fetch delivery-related data
$fetchDeliverySql = $pdo->prepare(
    "SELECT m_customer.username, m_order.generate_id, m_order.order_date, m_order.total_amt, m_delivery.delivery_name, m_order_details.quantity,m_order.delivery_status
    FROM m_customer 
    JOIN m_order ON m_order.customer_id = m_customer.id
    JOIN m_order_details ON m_order_details.order_id = m_order.id
    LEFT JOIN m_delivery ON m_delivery.region_id = m_customer.region_id
    JOIN m_product ON m_product.id = m_order_details.product_id
    JOIN m_merchant ON m_merchant.id = m_order.merchant_id
    WHERE m_order.delivery_status = 1 AND m_merchant.email = :email 
    GROUP BY m_order.id"
);

$fetchDeliverySql->bindValue(":email", $merchantEmail);
$fetchDeliverySql->execute();

// Store fetched data in session
$_SESSION["deliveries"] = $fetchDeliverySql->fetchAll(PDO::FETCH_ASSOC);

?>
