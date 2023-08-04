<?php
//Direct Access
if(count($_POST) == 0){
    header("Location: ../View/errors/error.php");
}else{

    $email=$_POST["email"];
    $time=$_POST["time"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    

    include "../Model/model.php";

    $sql=$pdo->prepare(
    "UPDATE m_admincontactus SET
        address =:address,
        phone=:phone,
        email = :email,
        available_time = :time
        WHERE id= 1;
    "
    );
    $sql->bindValue(":address",$address);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":time",$time);
    $sql->execute();

   // header("Location: ../View/categorylist.php ");

}
