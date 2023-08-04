<?php

include "../Model/model.php";
ini_set('display_errors', 1);
// //Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/404error.php");
} else{
 $username = $_POST['username'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];   
$profile = $_FILES["profile1"]["name"];
$profiletmp = $_FILES["profile1"]["tmp_name"];

if (move_uploaded_file($profiletmp,"../AdminStorge/admin/".$profile)){
    $sql = $pdo->prepare(
        "UPDATE m_admin SET 
    `username`= :username,
    `email`= :email,
    `phone`= :phone,
    `p_picture`= :profileimg  WHERE id = 1;
    "
    );

    $sql->bindValue(":username",$username);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":profileimg", "../AdminStorge/admin/".$profile);
    
    $sql->execute();

    header("Location: ../View/updateProfileNPassword.php");
}



}