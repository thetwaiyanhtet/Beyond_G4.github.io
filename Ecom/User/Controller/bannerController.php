<?php 


 //DB connection
 include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_banner;"
);


$sql->execute();

$_SESSION["banner"]  = $sql->fetchAll(PDO::FETCH_ASSOC);


