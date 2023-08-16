<?php
$merchantEmail = $_SESSION["merchant_ID"];
// echo $merchantEmail;
// DB connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_order_details.product_id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one,
    COUNT(m_order_details.product_id) as product_count, SUM(m_order_details.quantity) as total_quantity
    FROM m_order_details
    LEFT JOIN m_product 
    ON m_product.id = m_order_details.product_id
    GROUP BY m_order_details.product_id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    ORDER BY total_quantity DESC 
    limit 6
    "
);

$sql->execute();
$_SESSION["trandingProduct"] = $sql->fetchAll(PDO::FETCH_ASSOC);
//  echo "<pre>";
//  print_r($_SESSION["trandingProduct"]);

$trendingSql = $pdo->prepare(
    "SELECT m_order_details.product_id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one,
    COUNT(m_order_details.product_id) as product_count, SUM(m_order_details.quantity) as total_quantity
    FROM m_order_details
    LEFT JOIN m_product 
    ON m_product.id = m_order_details.product_id
    JOIN m_merchant
    ON m_order_details.merchant_id=m_merchant.id
    WHERE m_merchant.email = :email
    GROUP BY m_order_details.product_id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    ORDER BY total_quantity DESC 
    limit 6"
);
$trendingSql->bindValue(':email', $merchantEmail);
$trendingSql->execute();
$_SESSION["trandingProductGraph"] = $trendingSql->fetchAll(PDO::FETCH_ASSOC);
//  echo "<pre>";
//  print_r($_SESSION["trandingProductGraph"]);
//  echo "</pre>";



$TrendingViewAllsql = $pdo->prepare(
    "SELECT m_order_details.product_id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one,
    COUNT(m_order_details.product_id) as product_count, SUM(m_order_details.quantity) as total_quantity
    FROM m_order_details
    LEFT JOIN m_product 
    ON m_product.id = m_order_details.product_id
    GROUP BY m_order_details.product_id, m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    ORDER BY total_quantity DESC"
);

$TrendingViewAllsql->execute();
$trandingProductViewAll = $TrendingViewAllsql->fetchAll(PDO::FETCH_ASSOC);


$AllProductSql = $pdo->prepare(
    "SELECT m_product.id,m_product.name, m_product.description, m_product.sellprice, m_product.p_one
    FROM m_product
    WHERE m_product.id"
);

$AllProductSql->execute();
$AllProduct = $AllProductSql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
//  print_r($AllProduct);
//  echo "</pre>";

$FeatureShopSql = $pdo->prepare(
    "SELECT m_merchant.logo, m_merchant.m_name,m_merchant.id,m_merchant.store_name
    FROM m_merchant 
    ORDER BY create_date DESC
    LIMIT 3"
);

$FeatureShopSql->execute();
$latestMerchants = $FeatureShopSql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($latestMerchants);
