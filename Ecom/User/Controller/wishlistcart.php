<?php
session_start();
//DB Connection
include "../Model/model.php";
$userEmail = $_SESSION["user_ID"];
if (isset($_POST['product_id'])) {
    $id = $_POST['product_id'];
}



$sql = $pdo->prepare(
    "INSERT INTO m_wishlist_items (customer_id, product_id)
    
VALUES ((SELECT id FROM m_customer WHERE email = '$userEmail'),:id)

 ");
//  $sql->bindValue(":email", );
 $sql->bindValue(":id", $id);
 $sql->execute(); //run real sql

 $_SESSION["m_wish"] = $sql->fetchAll(PDO::FETCH_ASSOC);
