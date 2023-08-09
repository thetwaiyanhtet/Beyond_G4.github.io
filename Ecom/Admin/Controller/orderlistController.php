<?php
ini_set('display_errors', 1);
include "../Model/model.php";

$sql = $pdo->prepare("SELECT * From m_order ");

$sql->execute();

$results = $sql->fetchAll();

echo $result;
?>