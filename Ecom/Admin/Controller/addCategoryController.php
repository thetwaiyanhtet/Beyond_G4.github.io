<?php
// echo "<pre>";
// print_r($_POST);

ini_set('display_errors', 1);
// //Direct Access
if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}else{
   
    $cname=$_POST["cname"];
    $cdescription=$_POST["cdescription"];
   
    include "../Model/model.php";

    $sql=$pdo->prepare(
    "INSERT INTO m_admin_category
    ( c_name,
    description
    )
    VALUES
    (
        :cname,
        :cdescription  
    )
    "
    );
    $sql->bindValue(":cname",$cname);
    $sql->bindValue(":cdescription",$cdescription);
  
 
    $sql->execute();

    header("Location: ../View/categorylist.php");

}
