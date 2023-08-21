<?php
session_start();
include "../Model/model.php";

//search by product name
$searchText = $_POST["searchText"];

$AllProductSql = $pdo->prepare(
    "SELECT m_product.id,m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    FROM m_product
    WHERE m_product.name LIKE :searchText;"
);
$AllProductSql->bindValue(":searchText", '%' . $searchText . '%');
$AllProductSql->execute();
$AllProduct = $AllProductSql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($AllProduct);



?>