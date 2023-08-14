<?php
//Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {
    // echo "<pre>";
    // print_r($_POST);
    $id = $_POST["id"];
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
    $photo4tmp = $_FILES["photo4"]["tmp_name"];
    include "../Model/model.php";

        move_uploaded_file($photo1tmp, "../../Storage/product/" . $photo1); 
        move_uploaded_file($photo2tmp, "../../Storage/product/" . $photo2); 
        move_uploaded_file($photo3tmp, "../../Storage/product/" . $photo3); 
        move_uploaded_file($photo4tmp, "../../Storage/product/" . $photo4);
    
        $sql = $pdo->prepare(
            "UPDATE m_product SET
        name=:name,
        code=:product_id,
        category_id=:category_id,
        buyprice=:buyprice,
        sellprice=:sellprice,
        instock=:instock,
        description=:description,
        color_1=:color_1,
        color_2=:color_2,
        color_3=:color_3,
        size_s=:size1,
        size_m=:size2,
        size_l=:size3,
        size_xl=:size4,
        size_2xl=:size5,
        p_one=:photo1,
        p_two=:photo2,
        p_three=:photo3,
        p_four=:photo4

        
        WHERE id=:id;
    "
        );
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
        $sql->bindValue(":photo3","/Storage/product/".$photo3);
        $sql->bindValue(":photo4","/Storage/product/".$photo4);
        $sql->bindValue(":id", $id);
        $sql->execute();

        header("Location: ../View/productList.php ");
    }

