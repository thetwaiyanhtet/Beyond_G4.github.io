<?php

// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_product.p_one,m_product.name,m_product.sellprice,m_product.instock,m_merchant.m_name,m_product.product_id
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id;"
);

$sql->execute(); // real sql run 

$products = $sql->fetchAll(PDO::FETCH_ASSOC);
// DB Connection
