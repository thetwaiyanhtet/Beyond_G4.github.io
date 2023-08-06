<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT name,street,(SELECT name FORM m_township WHERE m_townships.id = township_id,email FROM m_customer WHERE id = '5';"
);
$sql->execute(); //run real sql

$_SESSION["m_cusaddress"]=$sql->fetchAll(PDO::FETCH_ASSOC);






