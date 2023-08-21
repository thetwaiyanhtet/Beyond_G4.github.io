<?php
session_start();
include "../Model/model.php";

$subcategoryId = $_POST["subcategoryId"];

$subCategoryProductSql = $pdo->prepare(
    "SELECT m_product.id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one, m_product.category_id
    FROM m_product
    WHERE m_product.sub_category_id = :selectedSubCategory"
);
$subCategoryProductSql->bindValue(":selectedSubCategory", $subcategoryId);
$subCategoryProductSql->execute();
$subCategoryProduct = $subCategoryProductSql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($subCategoryProduct);
