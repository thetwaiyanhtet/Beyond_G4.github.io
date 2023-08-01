<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_product where del_flg=0;"
);
$sql->execute(); //run real sql
// $_SESSION["m_product"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$data=$sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($data);
$_SESSION["m_product"]=$data;
// print_r($_SESSION);
//DB Connection

// header("Location: ../View/productList.php");
