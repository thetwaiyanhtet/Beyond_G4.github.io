<?php
session_start();
include "../Model/model.php";

$categoryId = $_POST["categoryId"];

$categoryProductSql = $pdo->prepare(
    "SELECT m_product.id,m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    FROM m_product
    WHERE m_product.category_id = :selectedCategory"
);
$categoryProductSql->bindValue(":selectedCategory", $categoryId);
$categoryProductSql->execute();
$categoryProduct = $categoryProductSql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($categoryProduct);
