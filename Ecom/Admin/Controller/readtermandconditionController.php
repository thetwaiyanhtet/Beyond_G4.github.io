<?php

//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_term_condition;"
);
$sql->execute(); //run real sql

$_SESSION["m_tc"]=$sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($_SESSION["m_tc"]);

