<?php
session_start();
include  "../Model/model.php";

$searchText = $_POST["searchText"];

$storeProductSql = $pdo->prepare(
    "SELECT m_product.id,m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    FROM m_product
    WHERE m_product.name LIKE :searchText"
);


$storeProductSql->execute();
$storeProducts = $storeProductSql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($storeProducts);
