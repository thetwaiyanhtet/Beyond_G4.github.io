<?php
session_start();
$category=$_GET["id"];
//  print_r($category);


if(!isset($category)){
    header("Location: ../View/errors/error.php");
}else{
    include "../Model/model.php";
    $sql=$pdo->prepare(
        "SELECT * FROM m_admin_category WHERE id=:id;"
        );
        $sql->bindValue(":id",$category);
        $sql->execute();

        $_SESSION["editcategory"]= $sql->fetchAll(PDO::FETCH_ASSOC);
        

        
        header("Location: ../View/editCategorylist.php");
    
}
