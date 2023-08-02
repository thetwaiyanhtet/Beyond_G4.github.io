<?php
session_start();

include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * from m_cusreview;"
);
$sql->execute();
$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);

$sqlusername = $pdo->prepare(
    "SELECT m_customer.username
    FROM m_cusreview
    INNER JOIN m_customer ON m_cusreview.customer_id = m_customer.id

    "
    );

    $sqlproductName = $pdo->prepare(
        "SELECT m_product.p_name
        FROM m_cusreview
        INNER JOIN m_product ON m_cusreview.product_id = m_product.id
       
        "
        );   

$sql->execute();
$sqlusername->execute();
$sqlproductName->execute();


$_SESSION["getUsername"] = $sqlusername->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getProductName"] = $sqlproductName->fetchAll(PDO::FETCH_ASSOC);
//print_r($_SESSION["getProductName"]);


