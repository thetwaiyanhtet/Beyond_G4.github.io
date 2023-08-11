<?php
session_start();
include "../Model/model.php";

$selectedOrder = $_SESSION["selectedOrder"];
// echo $selectedOrder;

// Update the delivery status
$setDeliverySql = $pdo->prepare(
    "UPDATE m_order
    SET delivery_status = 1
    WHERE generate_id = :id"
);

$setDeliverySql->bindValue(":id", $selectedOrder);
$setDeliverySql->execute();

header('Location: ../View/order_manage.php');