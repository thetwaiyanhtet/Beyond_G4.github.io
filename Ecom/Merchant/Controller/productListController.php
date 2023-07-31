<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_product;"
);
$sql->execute(); //run real sql
$_SESSION["rooms"] = $sql->fetchAll(PDO::FETCH_ASSOC);
//DB Connection

header("Location: ../View/dashboard.php");
