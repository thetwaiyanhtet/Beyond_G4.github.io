<?php
session_start();
include "../Model/model.php";
if(isset($_POST['logout'])){
    $logoutEmail = $_GET['email'];
    $sql = $pdo->prepare('UPDATE m_customer SET logOut=:logOutEmail WHERE email=:email');
    $sql->bindValue(":email",$logoutEmail);
    $sql->bindValue(":logOutEmail", $logoutEmail);
    $sql->execute();

    $DBlogoutEmail = $pdo->prepare("SELECT * From m_customer WHERE logOut=:email");
    $DBlogoutEmail->bindValue(":email",$logoutEmail);
    $DBlogoutEmail->execute();
    $logoutUser = $DBlogoutEmail->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['logOutEmail'] = $logoutUser[0]['logOut'];
    header("Location: ../View/mainPage.php");
}
?>