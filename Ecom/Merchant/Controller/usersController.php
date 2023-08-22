<?php
session_start();
include "../Model/model.php";
$outgoing_id = $_SESSION['unique_id'];

$sql = "SELECT * FROM m_merchant WHERE NOT unique_id = :outgoing_id ORDER BY id DESC";
$query = $pdo->prepare($sql);
$query-> bindValue(":outgoing_id",$outgoing_id);
$query->execute();

$output = "";

if ($query->rowCount() == 0) {
    $output .= "No users are available to chat";
} elseif ($query->rowCount() > 0) {
    include_once "./data.php";
}

echo $output;
