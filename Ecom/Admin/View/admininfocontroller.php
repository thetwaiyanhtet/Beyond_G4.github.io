<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start(); 
}
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_admin;"
);
$sql->execute(); //run real sql

$_SESSION["m_admin"]=$sql->fetchAll(PDO::FETCH_ASSOC);
