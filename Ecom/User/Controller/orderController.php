<?php 
session_start();
$carted = $_SESSION['carted'];

ini_set('display_errors', 1);
    $totalamt=$carted["totprice"];
    $numericString = preg_replace("/[^0-9]/", "", $totalamt);
                    $intValue = substr($numericString, 0, -2);
   include "../Model/model.php";

   $sql=$pdo->prepare(
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
       1,1,1,1,
       $intValue,
       NOW())
   "
   );

  // $sql->bindValue(":totalamt",$totalamt);
   $sql->execute();
   header("Location: ../View/orderConfirm.php");


