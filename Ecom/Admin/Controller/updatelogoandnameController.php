<?php

include "../Model/model.php";
ini_set('display_errors', 1);

if (count($_POST) == 0) {
    header("Location: ../View/404error.php");
} else{  

 $business_name = $_POST['business'];
$logo = $_FILES["logo"]["name"];
$logotmp = $_FILES["logo"]["tmp_name"];

if (move_uploaded_file($logotmp,"../../Storage/profile/".$logo)) {
  

    $sql = $pdo->prepare(
        "UPDATE m_logoandname SET 
    `logo`= :logo,
    `business_name`= :business_name  WHERE id = 1;
    "
    );


    $sql->bindValue(":business_name",$business_name);
    $sql->bindValue(":logo", "../../Storage/profile/".$logo);
    
    $sql->execute();
    print_r($sql);


}}
header("Location: ../View/updatelogoAndName.php ");
