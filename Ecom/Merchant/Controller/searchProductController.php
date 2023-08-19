<?php
session_start();
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
$searchText = $_POST["searchText"];

$sql = $pdo->prepare(
    "SELECT `m_product`.id AS `productID`,`m_product`.name,`m_product`.`id`,`m_product`.`category_id`,`m_product`.buyprice,`m_product`.sellprice,
    `m_product`.instock,`m_product`.create_date,`m_admin_category`.c_name
     FROM `m_product` 
     LEFT JOIN `m_admin_category`
     ON `m_product`.`category_id`=`m_admin_category`.id
     JOIN m_merchant
     ON m_product.merchant_id=m_merchant.id
     WHERE `m_product`.`del_flg`= 0 AND email=:email
     AND (
        `m_product`.name LIKE :searchText
        OR `m_product`.id LIKE :searchText
        OR `m_admin_category`.c_name LIKE :searchText
     )"
);

$sql->bindValue(":searchText", '%' . $searchText . '%');
$sql->bindValue(":email", $merchantEmail);
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($products, $startIndex, $itemsPerPage);

echo json_encode($paginatedData);


