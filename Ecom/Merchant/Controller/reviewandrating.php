<?php 
session_start();
//$id = $_GET["id"];
include "../Model/model.php";

$sql = $pdo->prepare(
"SELECT * from m_cusreview;"
);

$sqlusername = $pdo->prepare(
    "SELECT m_customer.username
    FROM m_cusreview
    INNER JOIN m_customer ON m_cusreview.id = m_customer.id
    WHERE m_cusreview.id = '1';
    "
    );

   // $sqlproductName = $pdo->prepare(
    //    "SELECT m_product.name
     //   FROM m_cusreview
     //   INNER JOIN m_product ON m_cusreview.id = m_product.id
     //   WHERE m_cusreview.id = '1';
      //  "
      //  );   

$sql->execute();
$sqlusername->execute();
$sqlproductName->execute();

$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getUsername"] = $sqlusername->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getProductName"] = $productName->fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION);
//header("Location: ../View/editMessage.php");