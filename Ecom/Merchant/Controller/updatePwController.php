<?php
session_start();

if(isset($_POST['update'])){
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $merchant_email = $_SESSION["merchant_ID"];
  
    // Select DB password
    include "../Model/model.php";
    $sql = $pdo->prepare("SELECT * FROM m_merchant WHERE email=:email");
    $sql->bindValue(":email",$merchant_email);
    $sql->execute();
    $merchantInfo = $sql->fetch(PDO::FETCH_ASSOC);  
    $merchantPw = $merchantInfo['password']; 
    if(password_verify($oldPassword,$merchantPw)){
       if (strlen($newPassword) && strlen($confirmPassword) < 8 ) {
        $_SESSION["message1"] = "Password must be a least 8 character long";
            header("Location: ../View/Setting.php");
       }elseif ($newPassword == $confirmPassword) {
        $update = $pdo ->prepare("UPDATE m_merchant SET password = :password WHERE email=:email");
        $update->bindValue(":email", $merchant_email);
        $update->bindValue(":password",password_hash($newPassword,PASSWORD_DEFAULT));
        $update->execute();
        header("Location: ../View/loading.php");
       }else{
        $_SESSION["message1"]= "New Password and confirm password don't match";
        header("Location: ../View/Setting.php");
       }
    }else{
        $_SESSION["message2"] = "Old password was wrong";
        header("Location: ../View/Setting.php");
    }
  }
