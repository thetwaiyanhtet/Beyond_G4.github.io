<?php
session_start();

// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_customer WHERE del_flg = 0;"
);

$sql->execute(); // real sql run 

$_SESSION["customers"]  = $sql->fetchAll(PDO::FETCH_ASSOC);
// DB Connection
?>
