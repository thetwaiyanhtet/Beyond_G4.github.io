<?php
session_start();
//DB Connection
include "../Model/model.php";
$userEmail = $_SESSION["user_ID"];
$id = $_GET['ppid'];

$sql = $pdo->prepare(
    " DELETE FROM m_wishlist_items
    WHERE customer_id = (SELECT id FROM m_customer WHERE email = '$userEmail') AND product_id = :id;
 "
);
$sql->bindValue(":id", $id);
$sql->execute(); //run real sql



header("Location: ../View/Wishlist2.php");
