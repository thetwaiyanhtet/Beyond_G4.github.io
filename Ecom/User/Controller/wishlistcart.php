<?php
session_start();
//DB Connection
include "../Model/model.php";
$userEmail = $_SESSION["user_ID"];
if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
}



$sql = $pdo->prepare(
    "INSERT INTO m_wishlist_items (customer_id, product_id,create_date)
    
VALUES ((SELECT id FROM m_customer WHERE email = '$userEmail'),:id,(SELECT CURRENT_TIMESTAMP AS CurrentDateTime)
)

 ");
//  $sql->bindValue(":email", );
 $sql->bindValue(":id", $id);
 $sql->execute(); //run real sql

 $_SESSION["m_wish"] = $sql->fetchAll(PDO::FETCH_ASSOC);

 header("Location: ../View/mainPage.php");
