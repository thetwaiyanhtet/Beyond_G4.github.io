<?php 
// DB Connection
include "../Model/model.php";

$merchantListsql = $pdo->prepare(
    "SELECT  m_merchant.email,m_merchant.m_name,m_merchant.create_date,m_plan.plan_name,m_merchant.id
     FROM m_merchant
     JOIN m_plan
     ON m_merchant.plan_id=m_plan.id;"
);

$merchantListsql->execute();
$merchantList = $merchantListsql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($merchantList, $startIndex, $itemsPerPage);

