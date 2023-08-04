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
    $photo1 = $_FILES["photo1"]["name"];
    $photo1tmp = $_FILES["photo1"]["tmp_name"];
    // $photo2 = $_FILES["photo2"]["name"];
    // $photo2tmp = $_FILES["photo2"]["tmp_name"];
    // $photo3 = $_FILES["photo3"]["name"];
    // $photo3tmp = $_FILES["photo3"]["tmp_name"];
    // $photo4 = $_FILES["photo4"]["name"];
    // $photo4tmp = $_FILES["photo4"]["tmp_name"];


    include "../Model/model.php";
    $sql = $pdo->prepare("SELECT id FROM m_merchant WHERE email = :email");
    $sql->bindValue(':email', $merchantEmail);
    echo $merchantEmail;
    $sql->execute();
    $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);
    $merchant_id = $merchant_data['id'];
    echo ($merchant_id);

    if (move_uploaded_file($photo1tmp,"../../Storage/product/".$photo1)) {

        $sql = $pdo->prepare(
            "INSERT INTO m_product
            (
            merchant_id, 
            name,
            product_id,
            category_id,
            buyprice,
            sellprice,
            instock,
            description,
            color_1,
            color_2,
            color_3,
            p_one,
            -- p_two,
            -- p_three,
            -- p_four,
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
                :photo1,
                -- :photo2,
                -- :photo3,
                -- :photo4,
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
        $sql->bindValue(":photo1", "/Storage/product/" . $photo1);
        // $sql->bindValue(":photo2", "/Storage/product/" . $photo2);
        // $sql->bindValue(":photo3", "/Storage/product/" . $photo3);
        // $sql->bindValue(":photo4", "/Storage/product/" . $photo4);
        $sql->bindValue(":createDate", date("Y-m-d"));
        $sql->bindValue(":updateDate", date("Y-m-d"));

        $sql->execute();
        header("Location: ../View/productList.php");
    } else {
        header("Location: ../View/errors/error.php");
    }
}
