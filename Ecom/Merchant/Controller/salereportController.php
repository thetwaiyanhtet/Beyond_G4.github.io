<?php
session_start();
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];

$sql = $pdo->prepare(
    "SELECT
	m_product.buyprice,
    m_product.sellprice,
	m_product.code,
	m_admin_category.c_name,
    m_product.name,
    m_order_details.quantity,
    m_order_details.price_per_unit,
    m_order.order_date
FROM m_order
JOIN m_order_details ON m_order_details.order_id = m_order.id
JOIN m_merchant ON m_merchant.id = m_order_details.merchant_id
JOIN m_product ON m_product.id = m_order_details.product_id
JOIN m_admin_category ON m_product.category_id = m_admin_category.id
WHERE m_merchant.email = :email 
GROUP BY m_order_details.id
ORDER BY m_order_details.id DESC;"
);

 $sql->bindValue(":email", $merchantEmail);
$sql->execute();
$sales = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($sales, $startIndex, $itemsPerPage);

