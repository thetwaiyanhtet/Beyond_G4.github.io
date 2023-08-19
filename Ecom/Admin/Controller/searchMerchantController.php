<?php
session_start();
// DB Connection
include "../Model/model.php";

$searchText = $_POST["searchText"];

$sql = $pdo->prepare(
    "SELECT  m_merchant.email,m_merchant.m_name,m_merchant.create_date,m_plan.plan_name,m_merchant.id
     FROM m_merchant
     JOIN m_plan
     ON m_merchant.plan_id = m_plan.id
     WHERE m_merchant.m_name LIKE :searchText;"
);
$sql->bindValue(":searchText", '%' . $searchText . '%');
$sql->execute();
$merchants = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 5; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($merchants, $startIndex, $itemsPerPage);

echo json_encode($paginatedData);