<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    include "../Model/model.php";

    $sql = $pdo->prepare("SELECT * FROM m_order_details WHERE order_id=:id");
    $sql->bindValue(":id", $order_id);
    $sql->execute();
    $getData = $sql->fetch();
    $merchantID = $getData['merchant_id'];
    $productID = $getData['product_id'];

    $SQL = $pdo->prepare("SELECT * FROM m_order WHERE id=:id");
    $SQL->bindValue(":id", $order_id);
    $SQL->execute();
    $customer = $SQL->fetch();
    $customerID = $customer['customer_id'];

    $merchantInfoSQL = $pdo->prepare("SELECT * From m_merchant WHERE id=:id");
    $merchantInfoSQL->bindValue(':id', $merchantID);
    $merchantInfoSQL->execute();
    $merchantInfoDetail = $merchantInfoSQL->fetch();

    $customerInfoSQL = $pdo->prepare("SELECT * From m_customer WHERE id=:id");
    $customerInfoSQL->bindValue(":id", $customerID);
    $customerInfoSQL->execute();
    $customerInfoDetail = $customerInfoSQL->fetch();

    $customerStreet = $customerInfoDetail['street'];
    $customerTown = $customerInfoDetail['township_id'];
    $customerRegion = $customerInfoDetail['region_id'];

    $getTownship = $pdo->prepare("SELECT t_name From m_townships WHERE id=:id");
    $getTownship->bindValue(":id", $customerTown);
    $getTownship->execute();
    $Township = $getTownship->fetch(); //get Township name

    $getRegion = $pdo->prepare("SELECT r_name From m_regions WHERE id=:id");
    $getRegion->bindValue(":id", $customerRegion);
    $getRegion->execute();
    $Region = $getRegion->fetch(); //get Township name

    $productSQL = $pdo->prepare("SELECT * From m_product WHERE id=:id");
    $productSQL -> bindValue(":id",$productID);
    $productSQL -> execute();
    $productInfo = $productSQL ->fetch();



    

} else {
    $errorInfo = $stmt->errorInfo();
}
