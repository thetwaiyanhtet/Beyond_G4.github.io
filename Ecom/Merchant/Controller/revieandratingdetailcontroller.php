<?php
session_start();
$id = $_GET["id"];
echo $id;
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_cusreview WHERE id = :id"
);

$sql->bindValue(":id", $id);
$sql->execute();

$_SESSION["reviewDetail"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$reviewData = $_SESSION["reviewDetail"];

$sqlusername = $pdo->prepare(
    "SELECT username
        FROM m_customer  JOIN m_cusreview
        ON m_customer.id = m_cusreview.customer_id
        WHERE m_cusreview.id =  $id " //m_cusreview.id = '1' get from user clicked id
);

$sqlproductPhoto = $pdo->prepare(
    "SELECT p_one
    FROM m_product  JOIN m_cusreview
    ON m_product.id = m_cusreview.product_id
    WHERE m_cusreview.id =  $id "
   );  


$sqlproductName = $pdo->prepare(

     "SELECT p_name
     FROM m_product  JOIN m_cusreview
     ON m_product.id = m_cusreview.product_id
     WHERE m_cusreview.id =  $id " 
    );   

$sqlusername->execute();
$sqlproductName->execute();
$sqlproductPhoto->execute();

$_SESSION["detailUsername"] = $sqlusername->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["detailProductName"] = $sqlproductName->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["detailProductPhoto"] = $sqlproductPhoto->fetchAll(PDO::FETCH_ASSOC);



header("Location: ../View/review and rating copy.php ");