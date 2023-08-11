<?php
//DB connection
//include "../Controller/wishlistcart.php";
include "../Model/model.php";
session_start();

$userEmail = $_SESSION["user_ID"];


$sql = $pdo->prepare(
    "SELECT c.username, p.p_one
    FROM m_customer c
    JOIN m_wishlist_items w ON c.id = (SELECT id FROM m_customer WHERE email = '$userEmail')
    JOIN m_product p ON w.product_id = p.id;;"
);

//$sql->bindValue(":email", $userEmail);

$sql->execute();

$_SESSION["wishlist"]  = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION["wishlist"]);

// print_r($_SESSION["banner"]);
// print_r($_SESSION["regions"]);
