<?php
//echo "<pre>";
// print_r($_POST);
session_start();

ini_set('display_errors', 1);
// //Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {

    $cname = $_POST["cname"];
    $cdescription = $_POST["cdescription"];

    include "../Model/model.php";

    // Check if the category name already exists
    $checkSql = $pdo->prepare("SELECT COUNT(*) FROM m_admin_category WHERE c_name = :cname");
    $checkSql->bindValue(":cname", $cname);
    $checkSql->execute();
    $categoryExists = $checkSql->fetchColumn();

    if ($categoryExists) {
        // Category name already exists, handle accordingly (display error message, redirect, etc.)
        $_SESSION["categoryError"] = "*Category is already exist!";
        header("Location: ../View/addcategory.php");
        exit;
    }


    $sql = $pdo->prepare(
        "INSERT INTO m_admin_category
    ( c_name,
    description,
    create_date,
    update_date
    )
    VALUES
    (
        :cname,
        :cdescription,
        :createDate,
        :updateDate  
    )
    "
    );
    $sql->bindValue(":cname", $cname);
    $sql->bindValue(":cdescription", $cdescription);
    $sql->bindValue(":createDate", date("Y-m-d"));
    $sql->bindValue(":updateDate", date("Y-m-d"));
    $sql->execute();


    header("Location: ../View/categorylist.php");
}
