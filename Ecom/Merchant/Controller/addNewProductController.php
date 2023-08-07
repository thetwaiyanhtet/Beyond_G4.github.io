<?php
session_start();
// echo "<pre>";
// print_r($_POST);
//middleware
// include "../../Merchant/Controller/middleware/loginCheck.php";
ini_set('display_errors', 1);
// //Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {
    $merchantEmail = $_SESSION["merchant_ID"];
    $name = $_POST["pname"];
    $pid = $_POST["pid"];
    $category = $_POST["category"];
    $buyprice = $_POST["buyprice"];
    $sellprice = $_POST["sellprice"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"];
    $color1 = $_POST["color1"];
    $color2 = $_POST["color2"];
    $color3 = $_POST["color3"];
    $size1 = $_POST["size1"];
    $size2 = $_POST["size2"];
    $size3 = $_POST["size3"];
    $size4 = $_POST["size4"];
    $size5 = $_POST["size5"];
    $photo1 = $_FILES["photo1"]["name"];
    $photo1tmp = $_FILES["photo1"]["tmp_name"];
    $photo2 = $_FILES["photo2"]["name"];
    $photo2tmp = $_FILES["photo2"]["tmp_name"];
    $photo3 = $_FILES["photo3"]["name"];
    $photo3tmp = $_FILES["photo3"]["tmp_name"];
    $photo4 = $_FILES["photo4"]["name"];
    $photo4tmp = $_FILES["photo4"]["tmp_name"]  ;


    include "../Model/model.php";

    $checkSql = $pdo->prepare("SELECT COUNT(*) FROM m_product WHERE code = :pid");
    $checkSql->bindValue(":pid", $pid);
    $checkSql->execute();
    $productIdExists = $checkSql->fetchColumn();

    if ($productIdExists) {
        // Category name already exists, handle accordingly (display error message, redirect, etc.)
        $_SESSION["productIdError"] = "*ProductId is already exist!";
        header("Location: ../View/addNewProduct.php");
        exit;
    }



    $sql = $pdo->prepare("SELECT id FROM m_merchant WHERE email = :email");
    $sql->bindValue(':email', $merchantEmail);
    echo $merchantEmail;
    $sql->execute();
    $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);
    $merchant_id = $merchant_data['id'];
    echo ($merchant_id);

    if (
        move_uploaded_file($photo1tmp, "../../Storage/product/" . $photo1) &&
        move_uploaded_file($photo2tmp, "../../Storage/product/" . $photo2) &&
        move_uploaded_file($photo3tmp, "../../Storage/product/" . $photo3) &&
        move_uploaded_file($photo4tmp, "../../Storage/product/" . $photo4)
    ) {

        $sql = $pdo->prepare(
            "INSERT INTO m_product
            (
            merchant_id, 
            name,
            code,
            category_id,
            buyprice,
            sellprice,
            instock,
            description,
            color_1,
            color_2,
            color_3,
            size_s,
            size_m,
            size_l,
            size_xl,
            size_2xl,
            p_one,
            p_two,
            p_three,
            p_four,
            create_date,
            update_date
            )
            VALUES
            (
                :merchantEmail,
                :name,
                :product_id,
                :category_id,
                :buyprice,
                :sellprice,
                :instock,
                :description,
                :color_1,
                :color_2,
                :color_3,
                :size1,
                :size2,
                :size3,
                :size4,
                :size5,
                :photo1,
                :photo2,
                :photo3,
                :photo4,
                :createDate,
                :updateDate
        
            )
            "
        );
        $sql->bindValue(":merchantEmail", $merchant_id);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":product_id", $pid);
        $sql->bindValue(":category_id", $category);
        $sql->bindValue(":buyprice", $buyprice);
        $sql->bindValue(":sellprice", $sellprice);
        $sql->bindValue(":instock", $quantity);
        $sql->bindValue(":description", $description);
        $sql->bindValue(":color_1", $color1);
        $sql->bindValue(":color_2", $color2);
        $sql->bindValue(":color_3", $color3);
        $sql->bindValue(":size1", $size1);
        $sql->bindValue(":size2", $size2);
        $sql->bindValue(":size3", $size3);
        $sql->bindValue(":size4", $size4);
        $sql->bindValue(":size5", $size5);
        $sql->bindValue(":photo1", "/Storage/product/" . $photo1);
        $sql->bindValue(":photo2", "/Storage/product/" . $photo2);
        $sql->bindValue(":photo3", "/Storage/product/" . $photo3);
        $sql->bindValue(":photo4", "/Storage/product/" . $photo4);
        $sql->bindValue(":createDate", date("Y-m-d"));
        $sql->bindValue(":updateDate", date("Y-m-d"));

        $sql->execute();
        header("Location: ../View/productList.php");
    } else {
        header("Location: ../View/errors/error.php");
    }
}
