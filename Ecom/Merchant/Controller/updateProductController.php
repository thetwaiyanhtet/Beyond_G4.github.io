<?php
//Direct Access
if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}else{
    $id=$_POST["id"];
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
    "UPDATE m_product SET
        name=:name,
        product_id=:product_id,
        buyprice=:buyprice,
        sellprice=:sellprice,
        instock=:instock,
        date=:date,
        description=:description
        
        WHERE id=:id;
    "
    );
    $sql->bindValue(":name",$name);
    $sql->bindValue(":product_id",$pid);
    $sql->bindValue(":buyprice",$buyprice);
    $sql->bindValue(":sellprice",$sellprice);
    $sql->bindValue(":instock",$quantity);
    $sql->bindValue(":date",$date);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: ../View/productList.php ");

}
