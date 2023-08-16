<?php
session_start();
$strquanti = $_SESSION['quantity'];
$totamt = $_SESSION['delitotalamt'];
$carted = $_SESSION["placeholdcart"];
$userEmail = $_SESSION["user_ID"];
ini_set('display_errors', 1);

$stringWithoutDollar = str_replace('$', '', $totamt);
$number = floatval($stringWithoutDollar);



include "../Model/model.php";

$sql = $pdo->prepare(
    "INSERT INTO m_order
   ( generate_id,
   customer_id,
   payment_id,
   payment_status,
   total_amt
   )
   VALUES
   (
    (
    CONCAT(
        SUBSTRING('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', FLOOR(1 + RAND() * 62), 1),
        SUBSTRING('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', FLOOR(1 + RAND() * 62), 1),
        SUBSTRING('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', FLOOR(1 + RAND() * 62), 1),
        SUBSTRING('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', FLOOR(1 + RAND() * 62), 1),
        SUBSTRING('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', FLOOR(1 + RAND() * 62), 1),
        SUBSTRING('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', FLOOR(1 + RAND() * 62), 1)
    )
),(SELECT id FROM m_customer WHERE email = :email),1,1,
       $number);
   "
);

$sql->bindValue(":email", $userEmail);

// $sql->bindValue(":totalamt",$totalamt);
$sql->execute();

$quantity = [];
$valuesArray = explode(",", $strquanti);

foreach ($valuesArray as $value) {
    array_push($quantity, $value);
}


foreach ($carted as $index => $chunk) {

    $productid =  $chunk['id'];
    $productprice = $chunk['sellprice'];
    $sql = $pdo->prepare(
        "INSERT INTO m_order_details (order_id,merchant_id, product_id, quantity, price_per_unit)
VALUES
   ((SELECT MAX(id) FROM m_order),(SELECT merchant_id
FROM m_product
WHERE m_product.id = $productid
),$productid,$quantity[$index], $productprice)"
    );
    $sql->execute();
};

$productQuanti = $pdo->prepare("UPDATE m_product p
JOIN m_order_details od ON p.id = od.product_id
SET p.instock = p.instock - od.quantity
WHERE od.order_id = (SELECT MAX(id) FROM m_order)");
$productQuanti->execute();
unset($_SESSION['usercart']);

header("Location: ../View/orderConfirm.php");
