<?php


include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_cusreview.id,m_product.name,
    m_customer.username,
    m_cusreview.comment,
    m_cusreview.rating
    FROM
    m_product JOIN m_cusreview ON m_product.id = m_cusreview.product_id
    JOIN m_customer ON m_cusreview.customer_id = m_customer.id 
    WHERE m_cusreview.merchant_id = '1';"
);
$sql->execute();
$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);









