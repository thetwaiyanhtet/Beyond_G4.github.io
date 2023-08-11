<?php
//DB connection
//include "../Controller/wishlistcart.php";
session_start();
include "../Model/model.php";

$userEmail = $_SESSION["user_ID"];


$sql = $pdo->prepare(
    "SELECT c.username, p.p_one,m.store_name,sellprice,p.name
    FROM m_customer c
    JOIN m_wishlist_items w ON c.id = (SELECT id FROM m_customer WHERE email = '$userEmail')
    JOIN m_product p ON w.product_id = p.id 
    JOIN m_merchant m ON p.merchant_id = m.id"
);

//$sql->bindValue(":email", $userEmail);

$sql->execute();

$_SESSION["wishlist"]  = $sql->fetchAll(PDO::FETCH_ASSOC);
 print_r($_SESSION["wishlist"]);