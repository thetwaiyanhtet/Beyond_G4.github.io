<?php 
include "../Model/model.php";

$categoryId = $_POST["category"];
$s_c_name = $_POST["scname"];

$sql = $pdo->prepare(
    "INSERT INTO t_sub_category
    ( category_id,s_c_name,create_date,update_date)
    VALUES
    (:categoryId,:s_c_name,NOW(),NOW());"
);

$sql->bindValue(":categoryId", $categoryId);
$sql->bindValue(":s_c_name", $s_c_name);
$sql->execute();

header("Location: ../View/addcategory.php");
?>