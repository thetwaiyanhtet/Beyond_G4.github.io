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
    $subCategory=$_POST["subCategory"];
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
    $size6 = $_POST["size6"];
    // $photo1 = $_FILES["photo1"]["name"];
    // $photo1tmp = $_FILES["photo1"]["tmp_name"];
    // $photo2 = $_FILES["photo2"]["name"];
    // $photo2tmp = $_FILES["photo2"]["tmp_name"];
    // $photo3 = $_FILES["photo3"]["name"];
    // $photo3tmp = $_FILES["photo3"]["tmp_name"];
    // $photo4 = $_FILES["photo4"]["name"];
    // $photo4tmp = $_FILES["photo4"]["tmp_name"];

    include "../Model/model.php";

    

    $existingPhoto1 = null;
    $existingPhoto2 = null;
    $existingPhoto3 = null;
    $existingPhoto4 = null;


    if (isset($_POST["id"]) && !empty($_POST["id"])) {
        $productId = $_POST["id"];

        // Query to retrieve existing image paths for the product
        $existingPhotosQuery = $pdo->prepare("SELECT p_one, p_two, p_three, p_four FROM m_product WHERE id = :id");
        $existingPhotosQuery->bindValue(":id", $productId);
        $existingPhotosQuery->execute();

        $existingPhotosData = $existingPhotosQuery->fetch(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($existingPhotosData);
        // echo "</pre>";

        if ($existingPhotosData) {
            $existingPhoto1 = $existingPhotosData["p_one"];
            $existingPhoto2 = $existingPhotosData["p_two"];
            $existingPhoto3 = $existingPhotosData["p_three"];
            $existingPhoto4 = $existingPhotosData["p_four"];
        }
    }


    if (isset($_FILES["photo1"]["name"]) && !empty($_FILES["photo1"]["name"])) {
        $photo1 = $_FILES["photo1"]["name"];
        $photo1tmp = $_FILES["photo1"]["tmp_name"];
    } else {
        $photo1 = $existingPhoto1; // Set photo to null if no file was uploaded
        $photo1tmp = null;
    }

    if (isset($_FILES["photo2"]["name"]) && !empty($_FILES["photo2"]["name"])) {
        $photo2 = $_FILES["photo2"]["name"];
        $photo2tmp = $_FILES["photo2"]["tmp_name"];
    } else {
        $photo2 = $existingPhoto2; // Set photo to null if no file was uploaded
        $photo2tmp = null;
    }

    if (isset($_FILES["photo3"]["name"]) && !empty($_FILES["photo3"]["name"])) {
        $photo3 = $_FILES["photo3"]["name"];
        $photo3tmp = $_FILES["photo3"]["tmp_name"];
    } else {
        $photo3 = $existingPhoto3; // Set photo to null if no file was uploaded
        $photo3tmp = null;
    }

    if (isset($_FILES["photo4"]["name"]) && !empty($_FILES["photo4"]["name"])) {
        $photo4 = $_FILES["photo4"]["name"];
        $photo4tmp = $_FILES["photo4"]["tmp_name"];
    } else {
        $photo4 = $existingPhoto4; // Set photo to null if no file was uploaded
        $photo4tmp = null;
    }

    move_uploaded_file($photo1tmp, "../../Storage/product/" . $photo1);
    move_uploaded_file($photo2tmp, "../../Storage/product/" . $photo2);
    move_uploaded_file($photo3tmp, "../../Storage/product/" . $photo3);
    move_uploaded_file($photo4tmp, "../../Storage/product/" . $photo4);

    $sql = $pdo->prepare(
        "UPDATE m_product SET
        name=:name,
        code=:product_id,
        category_id=:category_id,
        sub_category_id=:sub_category_id,
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
        size_free=:size6,
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
    $sql->bindValue(":sub_category_id",$subCategory);
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
    $sql->bindValue(":size6", $size6);
    $sql->bindValue(":photo1", $photo1 !== null ? $photo1 : $existingPhoto1);
    $sql->bindValue(":photo2", $photo2 !== null ? $photo2 : $existingPhoto2);
    $sql->bindValue(":photo3", $photo3 !== null ? $photo3 : $existingPhoto3);
    $sql->bindValue(":photo4", $photo4 !== null ? $photo4 : $existingPhoto4);
    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location: ../View/productList.php ");
}
