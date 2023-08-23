<?php
include "../Model/model.php";
$storeId = $_GET["id"];

$sql = $pdo->prepare(
    "SELECT m_admin_category.c_name,m_admin_category.id 
    FROM m_admin_category
    JOIN m_product
    ON m_product.category_id = m_admin_category.id
    JOIN m_merchant
    ON m_merchant.id = m_product.merchant_id
    WHERE m_merchant.id = :storeId"
);

$sql->bindValue(":storeId", $storeId, PDO::PARAM_INT); // Binding with correct data type
$sql->execute();
$categories = $sql->fetchAll(PDO::FETCH_ASSOC);

// $subSql = $pdo->prepare(
//     "SELECT t_sub_category.id AS id, t_sub_category.s_c_name, t_sub_category.category_id
//   FROM t_sub_category
//   JOIN m_admin_category
//   ON m_admin_category.id = t_sub_category.category_id;"
// );

// $subSql->execute();
// $subCategories = $subSql->fetchAll(PDO::FETCH_ASSOC);
