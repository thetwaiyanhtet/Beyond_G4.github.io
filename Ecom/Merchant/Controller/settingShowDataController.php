<?php
include "../Model/model.php";
$sql = $pdo->prepare("SELECT * From m_merchant");
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