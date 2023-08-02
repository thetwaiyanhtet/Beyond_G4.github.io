<?php
// echo "<pre>";
// print_r($_POST);

ini_set('display_errors', 1);
// //Direct Access
if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}else{
   
    $name=$_POST["pname"];
    $pid=$_POST["pid"];
    $category=$_POST["category"];
    $buyprice=$_POST["buyprice"];
    $sellprice=$_POST["sellprice"];
    $quantity=$_POST["quantity"];
    $description=$_POST["description"];
    $color1=$_POST["color1"];
    $color2=$_POST["color2"];
    $color3=$_POST["color3"];
    $photo1=$_POST["photo1"];
    $photo2=$_POST["photo2"];
    $photo3=$_POST["photo3"];
    $photo4=$_POST["photo4"];


    include "../Model/model.php";

    $sql=$pdo->prepare(
    "INSERT INTO m_product
    ( name,
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
    p_two,
    p_three,
    p_four,
    create_date,
    update_date
    )
    VALUES
    (
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
        :photo2,
        :photo3,
        :photo4,
        :createDate,
        :updateDate

    )
    "
    );
    $sql->bindValue(":name",$name);
    $sql->bindValue(":product_id",$pid);
    $sql->bindValue(":category_id",$category);
    $sql->bindValue(":buyprice",$buyprice);
    $sql->bindValue(":sellprice",$sellprice);
    $sql->bindValue(":instock",$quantity);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":color_1",$color1);
    $sql->bindValue(":color_2",$color2);
    $sql->bindValue(":color_3",$color3);
    $sql->bindValue(":photo1",$photo1);
    $sql->bindValue(":photo2",$photo2);
    $sql->bindValue(":photo3",$photo3);
    $sql->bindValue(":photo4",$photo4);
    $sql -> bindValue (":createDate", date("Y-m-d"));
    $sql -> bindValue (":updateDate", date("Y-m-d"));
    
 
    $sql->execute();

    header("Location: ../View/productList.php");

}