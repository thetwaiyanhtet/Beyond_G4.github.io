<?php

// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_product.p_one,m_product.name,m_product.sellprice,m_product.instock,m_merchant.m_name,m_product.id
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id;"
);

$sql->execute(); // real sql run 
$products = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($products, $startIndex, $itemsPerPage);

