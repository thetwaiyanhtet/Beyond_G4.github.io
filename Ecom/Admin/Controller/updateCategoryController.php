<?php
//Direct Access
if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}else{

    $id=$_POST["id"];
    $cname=$_POST["cname"];
    $cdescription=$_POST["cdescription"];
    

    include "../Model/model.php";

    $sql=$pdo->prepare(
    "UPDATE m_admin_category SET
        c_name=:cname,
        description=:cdescription
    
        WHERE id=:id;
    "
    );
    $sql->bindValue(":cname",$cname);
    $sql->bindValue(":cdescription",$cdescription);
    $sql->bindValue(":id",$id);
    $sql->execute();

    header("Location: ../View/categorylist.php ");

}
