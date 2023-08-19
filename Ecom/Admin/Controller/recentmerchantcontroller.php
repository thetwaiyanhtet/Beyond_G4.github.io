<?php
// session_start();
//DB Connection
include "../Model/model.php";
 $mid = $pdo->prepare(
    "SELECT id
    FROM m_merchant
    ORDER BY m_merchant.id DESC
    LIMIT 3;"
);
$mid->execute(); //run real sql

$iddata=$mid->fetchAll(PDO::FETCH_ASSOC);

$idValues = array_column($iddata, 'id');
$string = implode(',', $idValues);
echo $string;

$sql = $pdo->prepare(
    "SELECT create_date from m_merchant WHERE m_merchant.id IN ($string);"
);
$sql->execute(); //run real sql

$data=$sql->fetchAll(PDO::FETCH_ASSOC);

 print_r($data);
// $_SESSION["m_category"]=$data;

//DB Connection