<?php
session_start();
include_once "../Model/model.php";

$outgoing_id = $_SESSION['unique_id'];
$searchTerm = $_POST['searchTerm'];

$sql = "SELECT * FROM m_merchant WHERE NOT unique_id = :outgoing_id AND (m_name LIKE :searchTerm)";
$query = $pdo->prepare($sql);
$query->bindParam(':outgoing_id', $outgoing_id, PDO::PARAM_INT);
$query->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
$query->execute();

$output = "";

if($query->rowCount() > 0){
    include_once "./data.php";
} else {
    $output .= 'No user found related to your search term';
}

echo $output;
