<?php
// DB Connection
include "../Model/model.php";
// include "../Controller/middleware/loginCheck.php";

$merchantEmail = $_SESSION["merchant_ID"];

$sql = $pdo->prepare(
    "SELECT `m_product`.id AS `productID`,
    `m_product`.name,
    `m_product`.`id`,
    `m_product`.`code`,
    `m_product`.`category_id`,
    `m_product`.buyprice,
    `m_product`.sellprice,
    `m_product`.instock,
    `m_product`.create_date,
    `m_admin_category`.c_name
     FROM `m_product` 
     LEFT JOIN `m_admin_category`
     ON `m_product`.`category_id`=`m_admin_category`.id
     JOIN m_merchant
     ON m_product.merchant_id=m_merchant.id
     WHERE `m_product`.`del_flg`= 0 and email=:email"
);
$sql->bindValue(":email", $merchantEmail);
$sql->execute(); // run real sql

$data = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 5; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($data, $startIndex, $itemsPerPage);

// Store paginated data in session
$_SESSION["paginated_m_product"] = $paginatedData;

// header("Location: ../View/productList.php");
