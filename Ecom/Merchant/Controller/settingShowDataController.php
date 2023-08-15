<?php
// session_start();
 $merchantEmail = $_SESSION["merchant_ID"];
include "../Model/model.php";
$sql = $pdo->prepare("SELECT * From m_merchant WHERE email = :email");
$sql->bindValue(':email', $merchantEmail);
$sql->execute();
$merchantInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($merchantInfo as $merchant){
    $storeName = $merchant['store_name'];
    $slogan = $merchant['slogan'];
    $phone = $merchant['phone'];
    $logo = $merchant['logo'];
    $banner = $merchant['banner'];
}
$logoImagePath = isset($merchant['logo']);
$bannerImagePath = isset($merchant['banner']);
?>