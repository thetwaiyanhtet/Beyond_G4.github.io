<?php

$id=$_GET["id"];

echo $id;

include "../Model/model.php";

$sql=$pdo->prepare(
    "UPDATE m_product SET
    del_flg = 1
    WHERE id=:id
    "
);

$sql->bindValue(":id",$id);
$sql->execute();

header("Location: ../View/productList.php");
