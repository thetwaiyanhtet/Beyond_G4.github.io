<?php

session_start();
// $carted = $_SESSION['carted'];
$userEmail = $_SESSION["user_ID"];
ini_set('display_errors', 1);
$totalamt = $carted["totprice"];
$numericString = preg_replace("/[^0-9]/", "", $totalamt);
$intValue = substr($numericString, 0, -2);
include "../Model/model.php";

$sql = $pdo->prepare(
    "INSERT INTO m_order
   ( generate_id,
   customer_id,
   merchant_id,
   payment_id,
   total_amt,
   order_date
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
       $intValue,
       NOW())
   "
);

$sql->bindValue(":email", $userEmail);

// $sql->bindValue(":totalamt",$totalamt);
$sql->execute();

// header("Location: ../View/orderConfirm.php");
$chunks = array_chunk($_SESSION['carted'], 6, true);
$lastIndex = count($chunks) - 1;
foreach ($chunks as $index => $chunk) {
    if ($index == $lastIndex) {
        continue;
    }
    $numericString = preg_replace("/[^0-9]/", "", $chunk["price_" . $index]);
    $intValue = substr($numericString, 0, -2);
    $quantit = $chunk["quantity_" . $index];

    $sql = $pdo->prepare(
        "INSERT INTO m_order_details (order_id, product_id, quantity, price_per_unit)
VALUES
   ((SELECT MAX(id) FROM m_order), $index+2, $quantit, $intValue);"
    );
    $sql->execute();
};

$productQuanti = $pdo->prepare("UPDATE m_product p
JOIN m_order_details od ON p.id = od.product_id
SET p.instock = p.instock - od.quantity
WHERE od.order_id = (SELECT MAX(id) FROM m_order)");
$productQuanti->execute();

header("Location: ../../View/orderConfirm.php");