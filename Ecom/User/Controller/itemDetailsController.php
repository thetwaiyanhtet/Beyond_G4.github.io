<?php

// Connect to the database
include "../Model/model.php";

// Prepare and execute the SQL query
$sql = $pdo->prepare(
    "SELECT m_product.p_one, m_product.p_two, m_product.p_three, m_product.name, m_product.description,
    m_merchant.m_name, m_product.sellprice, m_product.color_1, m_product.color_2, m_product.color_3,
    m_product.size_s, m_product.size_m, m_product.size_l, m_product.size_xl, m_product.size_2xl
    FROM m_product
    JOIN m_merchant ON m_merchant.id = m_product.merchant_id
    WHERE m_product.id = 4"
);
$sql->execute();
$ItemDetails = $sql->fetchAll(PDO::FETCH_ASSOC);

// Output the results
// echo "<pre>";
// print_r($ItemDetails);