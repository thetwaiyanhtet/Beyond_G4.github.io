<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_admin_category;"
);
$sql->execute(); //run real sql

$data=$sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["m_category"]=$data;

//DB Connection


