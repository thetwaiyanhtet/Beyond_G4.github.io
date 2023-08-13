<?php

//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT  m_product.name, SUM(m_order_details.quantity) AS total_sales
    FROM m_product
    JOIN m_order_details ON m_product.id = m_order_details.product_id
    GROUP BY m_product.id, m_product.name
    ORDER BY total_sales DESC
    LIMIT 4;"
);
$sql->execute(); //run real sql

$_SESSION["m_trending"]=$sql->fetchAll(PDO::FETCH_ASSOC);
// echo $_SESSION["m_trending"];



