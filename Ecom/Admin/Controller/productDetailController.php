<?php 
session_start();

//DB connection
include "../Model/model.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $productId = $_GET["id"];

$sql = $pdo->prepare(
    "SELECT m_product.p_one,m_product.name,m_product.sellprice,m_product.instock,m_merchant.store_name,m_product.id,
    m_product.create_date,m_product.instock,m_admin_category.c_name,m_product.color_1,m_product.color_2,m_product.color_3
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id
    JOIN m_admin_category
    ON m_admin_category.id = m_product.category_id
    WHERE m_product.id = :id;"
);

$sql->bindValue(":id", $productId);
$sql->execute();

$productDetail = $sql->fetch(PDO::FETCH_ASSOC);
}

// echo "<pre>";
// print_r($productDetail);
// echo "</pre>";
?>