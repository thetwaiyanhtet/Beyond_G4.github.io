<?php 
session_start();

//DB connection
include "../Model/model.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $productId = $_GET['id'];

$sql = $pdo->prepare(
    "SELECT * FROM m_product WHERE id = :id;"
);

$sql->bindValue(":id", $productId);
$sql->execute();

$productDetail = $sql->fetch(PDO::FETCH_ASSOC);
}
?>