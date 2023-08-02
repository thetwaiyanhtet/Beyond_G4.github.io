<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT `m_product`.id AS `productID`,`m_product`.name,`m_product`.`product_id`,`m_product`.`category_id`,`m_product`.buyprice,
    `m_product`.sellprice,`m_product`.instock,`m_product`.date,`m_admin_category`.c_name
     FROM `m_product` 
     LEFT JOIN `m_admin_category`
    ON `m_product`.`category_id`=`m_admin_category`.id WHERE`m_product`.`del_flg`=0"
);
$sql->execute(); //run real sql
// $_SESSION["m_product"] = $sql->fetchAll(PDO::FETCH_ASSOC);
$data=$sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($data);
$_SESSION["m_product"]=$data;
// print_r($_SESSION);
//DB Connection

// header("Location: ../View/productList.php");
