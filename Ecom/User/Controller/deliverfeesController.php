<?php

    session_start();
    require_once "../Model/model.php";
    $user = $_SESSION["user_ID"];
$delifees = $pdo->prepare(
    "SELECT delivery_fees FROM `m_delivery` JOIN m_customer ON m_delivery.region_id = m_customer.region_id
     WHERE `m_customer.email` = :email "
);

$delifees->bindValue(":email", $user);
$delifees->execute();
$_SESSION['delifees'] = $delifees->fetchAll(PDO::FETCH_ASSOC);
print_r($_SESSION['delifees']);
?>