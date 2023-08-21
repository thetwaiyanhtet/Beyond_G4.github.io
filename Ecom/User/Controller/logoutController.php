<?php
session_start();
include "../Model/model.php";
if(isset($_POST['logout'])){

    session_destroy();

    // if(isset($logoutEmail)){
    //     $sql = $pdo->prepare("UPDATE m_customer SET del_flg = 1 WHERE email = :logoutEmail");
    //     $sql->bindValue(':logoutEmail', $logoutEmail);
        
    //     if($sql->execute()){
    //         if ($logoutEmail == $logout[0]['email']) {
    //             unset($_SESSION['checkEmail']);
    //         }
    //         echo $_SESSION['checkEmail'];
    //         // header("location: ../login.php");
    //     }
    // } 
    header("Location: ../View/testingLogout.php");
}
?>