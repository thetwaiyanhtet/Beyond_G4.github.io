<?php
session_start();

// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_order;"
);

$sqlCusName = $pdo->prepare(
    "SELECT m_customer.username
    FROM m_customer
    INNER JOIN m_customer ON m_order.customer_id = m_customer.id
    WHERE m_customer.id =1;
    "
);

$sql->execute(); // real sql run 
$sqlCusName->execute();

$_SESSION["orders"]  = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["getCusName"] = $sqlCusName->fetchAll(PDO::FETCH_ASSOC);
// DB Connection


header("Location: ../View/order_manage.php");
