<?php 
include "../Model/model.php";

$_GET[""]

$sql = $pdo->prepare(
    "INSERT INTO m_cusreview (customer_id,merchant_id,product_id,comment,rating)
    VALUES (:customerid,:merchantid,:productid,:comment,:rating)"
);

$sql->bindValue("",);
$sql->execute();

$reviewNRating = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($reviewNRating);
?>