<?php
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
// echo $merchantEmail;
$sql = $pdo->prepare(
    "SELECT m_cusreview.id,m_product.name,m_customer.username,m_cusreview.comment,m_cusreview.rating
    FROM m_product 
    JOIN m_cusreview ON m_product.id = m_cusreview.product_id
    JOIN m_customer ON m_cusreview.customer_id = m_customer.id 
    JOIN m_merchant ON m_merchant.id = m_cusreview.merchant_id
    WHERE m_merchant.email =:email;"
);

$sql->bindValue(":email", $merchantEmail);
$sql->execute();
$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($_SESSION["getReviewandRating"], $startIndex, $itemsPerPage);







