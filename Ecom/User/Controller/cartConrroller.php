<?php 
 require_once ("../Controller/newcartController.php");


$placeholers = [];
foreach ($cart as $item) {
    $placeholders[] = $item['product_id'];
}

$placeholdersString = implode(',', $placeholders);


$sql = $pdo->prepare(
    "SELECT p_one,name,sellprice FROM m_product WHERE id IN ($placeholdersString)"
);
$sql->execute();

$_SESSION['placeholdcart'] = $sql->fetchAll(PDO::FETCH_ASSOC);


header("Location: ../View/userCart.php");

?>