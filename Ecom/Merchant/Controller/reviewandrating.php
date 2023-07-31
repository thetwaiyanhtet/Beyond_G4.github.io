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

$sql->execute();
$sqlusername->execute();

$_SESSION["getReviewandRating"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getUsername"] = $sqlusername->fetchAll(PDO::FETCH_ASSOC);

//header("Location: ../View/editMessage.php");