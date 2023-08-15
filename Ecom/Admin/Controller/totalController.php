<?php
// session_start();
//DB Connection
include "../Model/model.php";

$order = $pdo->prepare(
    "SELECT COUNT(*) FROM m_order;"
);

$merchant = $pdo->prepare(
    "SELECT COUNT(*) FROM m_merchant;"
);

$customer = $pdo->prepare(
    "SELECT COUNT(*) FROM m_customer;"
);

$revenue = $pdo->prepare(
    "SELECT SUM(price) AS sum_received FROM m_plan JOIN m_merchant ON m_merchant.plan_id = m_plan.id; "
);


$order->execute(); //run real sql
$merchant->execute(); //run real sql
$customer->execute(); //run real sql
$revenue->execute(); //run real sql

$_SESSION["order"]=$order->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["merchant"]=$merchant->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["customer"]=$customer->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["revenue"]=$revenue->fetchAll(PDO::FETCH_ASSOC);


