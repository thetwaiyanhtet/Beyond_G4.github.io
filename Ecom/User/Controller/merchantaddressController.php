<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT name,str,township,email FROM m_customer WHERE id = '5';"
);
$sql->execute(); //run real sql

$_SESSION["m_cusaddress"]=$sql->fetchAll(PDO::FETCH_ASSOC);






