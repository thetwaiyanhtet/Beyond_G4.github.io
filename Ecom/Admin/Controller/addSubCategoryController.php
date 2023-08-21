<?php 
session_start();
include "../Model/model.php";

$categoryId = $_POST["category"];
$s_c_name = $_POST["scname"];


$checkSubSql = $pdo->prepare("SELECT COUNT(*) FROM t_sub_category WHERE s_c_name = :s_cname");
$checkSubSql->bindValue(":s_cname", $s_c_name);
$checkSubSql->execute();
$subCategoryExists = $checkSubSql->fetchColumn();

if ($subCategoryExists) {
   
    $_SESSION["subCategoryError"] = "*Sub-Category is already exist!";
    header("Location: ../View/addcategory.php");
    exit;
}



$sql = $pdo->prepare(
    "INSERT INTO t_sub_category
    ( category_id,s_c_name,create_date,update_date)
    VALUES
    (:categoryId,:s_c_name,NOW(),NOW());"
);

$sql->bindValue(":categoryId", $categoryId);
$sql->bindValue(":s_c_name", $s_c_name);
$sql->execute();

header("Location: ../View/categorylist.php");
?>