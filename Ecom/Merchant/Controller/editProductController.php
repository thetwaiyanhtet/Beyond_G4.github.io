<?php
session_start();
$product=$_GET["id"];
//  print_r($product);


if(!isset($product)){
    header("Location: ../View/errors/error.php");
}else{
    include "../Model/model.php";
    $sql=$pdo->prepare(
        "SELECT * FROM m_product WHERE id=:id;"
        );
        $sql->bindValue(":id",$product);
        $sql->execute();

        $_SESSION["editproduct"]= $sql->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($_SESSION["editproduct"]);
        

        
        header("Location: ../View/editProduct.php");
    
}
