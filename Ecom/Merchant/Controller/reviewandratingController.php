<?php 
session_start();
//$id = $_GET["id"];
include "../Model/model.php";

$sql = $pdo->prepare(
"SELECT * from m_cusreview;"
);
$sql->execute();
$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);

$sqlusername = $pdo->prepare(
    "SELECT username
    FROM m_customer JOIN m_cusreview ON m_customer.id = m_cusreview.customer_id
   
    " 
    );

    $sqlproductName = $pdo->prepare(
        "SELECT name
        FROM m_product JOIN m_cusreview ON m_product.id = m_cusreview.product_id
       
        " );   


$sqlusername->execute();
$sqlproductName->execute();


$_SESSION["getUsername"] = $sqlusername->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getProductName"] = $sqlproductName->fetchAll(PDO::FETCH_ASSOC);


