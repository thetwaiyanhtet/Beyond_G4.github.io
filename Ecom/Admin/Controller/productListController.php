<?php
session_start();

// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_product;"
);

$sql->execute(); // real sql run 

$_SESSION["products"]  = $sql->fetchAll(PDO::FETCH_ASSOC);
// DB Connection
