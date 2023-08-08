<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT name, street,
    (SELECT name FROM m_townships WHERE m_townships.id = township_id) AS township_name,
    email
FROM m_customer
WHERE id = '5';
"
);
$sql->execute(); //run real sql

$_SESSION["m_cusaddress"] = $sql->fetchAll(PDO::FETCH_ASSOC);
