<?php
session_start();
$id = $_GET["id"];
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_cusreview.id,m_product.name,m_admin_category.c_name,
    m_customer.username,m_cusreview.comment,m_cusreview.rating
    FROM m_product 
    JOIN m_cusreview ON m_product.id = m_cusreview.product_id
    JOIN m_customer ON m_cusreview.customer_id = m_customer.id 
    JOIN m_admin_category ON m_product.category_id = m_admin_category.id
    WHERE m_cusreview.id = :id"
);

$sql->bindValue(":id", $id);
$sql->execute();

$_SESSION["reviewDetail"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$reviewData = $_SESSION["reviewDetail"];
echo json_encode($reviewData);
