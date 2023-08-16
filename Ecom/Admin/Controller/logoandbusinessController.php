<?php

//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_logoandname;"
);
$sql->execute(); //run real sql

$_SESSION["m_logo"]=$sql->fetchAll(PDO::FETCH_ASSOC);

