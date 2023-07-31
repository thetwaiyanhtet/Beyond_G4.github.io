<?php
//Direct Access
if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}else{
   
    $name=$_POST["pname"];
    $pid=$_POST["pid"];
    // $category=$_POST["category"];
    $buyprice=$_POST["buyprice"];
    $sellprice=$_POST["sellprice"];
    $quantity=$_POST["quantity"];
    $date=$_POST["date"];
    $description=$_POST["description"];
   
    include "../Model/model.php";

    $sql=$pdo->prepare(
    "INSERT INTO m_product
    ( name,
    product_id,
    buyprice,
    sellprice,
    instock,
    date,
    description 
    )
    VALUES
    (
        :name,
        :product_id,
        :buyprice,
        :sellprice,
        :instock,
        :date,
        :description
    )
    "
    );
    $sql->bindValue(":name",$name);
    $sql->bindValue(":product_id",$pid);
    $sql->bindValue(":buyprice",$buyprice);
    $sql->bindValue(":sellprice",$sellprice);
    $sql->bindValue(":instock",$quantity);
    $sql->bindValue(":date",$date);
    $sql->bindValue(":description",$description);
 
    $sql->execute();

    header("Location: ./dashboardController.php");

}
