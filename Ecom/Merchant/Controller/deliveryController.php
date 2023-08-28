<?php
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];

$fetchDeliverySql = $pdo->prepare(
    "SELECT m_customer.username, m_order.generate_id, m_order.order_date, SUM(m_order.total_amt) AS total_amount,
    m_delivery.delivery_name, SUM(m_order_details.quantity) AS total_quantity, m_order_details.delivery_status,
    m_delivery.delivery_fees
    FROM m_customer 
    JOIN m_order ON m_order.customer_id = m_customer.id
    JOIN m_order_details ON m_order_details.order_id = m_order.id
    LEFT JOIN m_delivery ON m_delivery.region_id = m_customer.region_id
    JOIN m_product ON m_product.id = m_order_details.product_id
    JOIN m_merchant ON m_merchant.id = m_order_details.merchant_id
    WHERE m_order_details.delivery_status = 1 AND m_merchant.email = :email 
    GROUP BY m_customer.username, m_order.generate_id, m_order.order_date, m_delivery.delivery_name,
    m_order_details.delivery_status, m_delivery.delivery_fees
    ORDER BY m_order.generate_id DESC"
);

$fetchDeliverySql->bindValue(":email", $merchantEmail);
$fetchDeliverySql->execute();
$deliveries = $fetchDeliverySql->fetchAll(PDO::FETCH_ASSOC);

$itemsPerPage = 7;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$startIndex = ($currentPage - 1) * $itemsPerPage;

$paginatedData = array_slice($deliveries, $startIndex, $itemsPerPage);
?>
