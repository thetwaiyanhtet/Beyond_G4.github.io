<?php

//DB connection
include "../Model/model.php";
//include "../View/address.php";
$str = $_POST["str"];
$township = $_POST["township"];
$region = $_POST["region"];



$sql = $pdo->prepare(
    "UPDATE m_customer SET
        str=:str,
        township=:township,
        region=:region,
        update_date=:update_date
        WHERE id = 1;
        "
);
$sql->bindValue(":str", $str);
$sql->bindValue(":township", $township);
$sql->bindValue(":region", $region);
$sql->bindValue(":update_date", date("Y-m-d"));

$sql->execute();

$_SESSION["address"]  = $sql->fetchAll(PDO::FETCH_ASSOC);

header("Location: ../View/address.php");