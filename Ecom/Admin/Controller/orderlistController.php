<?php
ini_set('display_errors', 1);
include "../Model/model.php";

$sql = $pdo->prepare("SELECT * FROM `m_order` INNER JOIN m_order_details ON m_order.id = m_order_details.order_id JOIN m_product ON m_product.id = m_order_details.product_id");
$sql->execute();
$results = $sql->fetch(); 


 //SELECT MERCHANT DATA;
$merchantID = $results['merchant_id'];

$merchantSQl = $pdo->prepare("SELECT * FROM m_merchant WHERE id=:id");
$merchantSQl ->bindValue(":id", $merchantID);
$merchantSQl->execute();
$merchantInfo = $merchantSQl->fetch();

$customerID = $results['customer_id'];

$customerSQl = $pdo->prepare("SELECT * FROM m_customer WHERE id=:id");
$customerSQl ->bindValue(":id", $customerID);
$customerSQl->execute();
$customerInfo = $customerSQl->fetch();

$customerAddress = $pdo->prepare("SELECT street,township_id,region_id From m_customer WHERE id=:id");
$customerAddress ->bindValue(':id',$customerID);
$customerAddress->execute();
$customerDetailAdd = $customerAddress->fetch();
$customerStreetName = $customerDetailAdd['street'];//get street name
$customerTown = $customerDetailAdd['township_id'];
$customerRegion = $customerDetailAdd['region_id'];

$getTownship = $pdo->prepare("SELECT t_name From m_townships WHERE id=:id");
$getTownship->bindValue(":id",$customerTown);
$getTownship->execute();
$Township = $getTownship->fetch(); //get Township name

$getRegion = $pdo->prepare("SELECT r_name From m_regions WHERE id=:id");
$getRegion->bindValue(":id",$customerRegion);
$getRegion->execute();
$Region = $getRegion->fetch(); //get Township name


?>