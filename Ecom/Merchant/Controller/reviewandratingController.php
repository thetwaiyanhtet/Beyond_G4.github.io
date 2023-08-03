<?php


include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * from m_cusreview;"
);
$sql->execute();
$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);

$sqlusername = $pdo->prepare(
    "SELECT m_customer.username
    FROM m_cusreview
    LEFT JOIN m_customer ON m_cusreview.customer_id = m_customer.id
    "
    );

    $sqlproductName = $pdo->prepare(
        "SELECT m_product.name
        FROM m_cusreview
        LEFT JOIN m_product ON m_cusreview.product_id = m_product.id
        "
        );   


$sqlusername->execute();
$sqlproductName->execute();


$_SESSION["getUsername"] = $sqlusername->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getProductName"] = $sqlproductName->fetchAll(PDO::FETCH_ASSOC);



