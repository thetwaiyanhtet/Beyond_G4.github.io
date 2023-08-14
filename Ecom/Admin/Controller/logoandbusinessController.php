<?php
session_start();
//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT username,p_picture From m_admin"
);
$sql->execute(); 
$admin = $sql->fetch();

