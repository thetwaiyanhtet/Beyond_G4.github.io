<?php
ini_set('display_errors', 1);
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_order.generate_id, m_order.id, 
    m_merchant.store_name, m_customer.username, m_customer.street,
    m_regions.r_name, m_townships.t_name,
    GROUP_CONCAT(m_product.name) AS product_names,
    m_order.total_amt, m_order.order_date
    FROM m_order 
    JOIN m_order_details ON m_order.id = m_order_details.order_id
    JOIN m_product ON m_product.id = m_order_details.product_id
    JOIN m_customer ON m_order.customer_id = m_customer.id
    JOIN m_merchant ON m_order_details.merchant_id = m_merchant.id
    JOIN m_townships ON m_customer.township_id = m_townships.id
    JOIN m_regions ON m_customer.region_id = m_regions.id
    GROUP BY m_order.id, m_merchant.store_name, m_customer.username, m_customer.street,
    m_regions.r_name, m_townships.t_name,
    m_order.total_amt, m_order.order_date"
);

$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($results, $startIndex, $itemsPerPage);
