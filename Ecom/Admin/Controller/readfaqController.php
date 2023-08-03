<?php

//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_faq;"
);
$sql->execute(); //run real sql

$_SESSION["m_faq"]=$sql->fetchAll(PDO::FETCH_ASSOC);





