<?php
//DB Connection
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../Model/model.php";
include "../Controller/common/passwordGenerate.php";

// include "./common/mailSender.php";
// include(__DIR__ . '/common/mailSender.php');
// $filePath = realpath(__DIR__ . '/common/mail');
// if ($filePath !== false) {
//     include($filePath);
// } else {
//     echo "File not found";
// }

session_start();
if (isset($_POST['update'])) {
    $email =   $_POST['email'];

    $sql = $pdo->prepare("SELECT email FROM m_admin WHERE email=:email");
    $sql->bindValue(":email", $email);
    $sql->execute();
    $DBemail = $sql->fetchColumn();
    echo $DBemail;

    if($DBemail){
        $tokenPw = generatePassword();
        $sql = $pdo->prepare(
          "UPDATE m_admin SET login_password = :token WHERE email =:email"
        );
        $sql->bindValue(":token", password_hash($tokenPw, PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->execute();
        echo "Successfully update password";
        
        include "../Controller/common/mailSender.php";
        //send email 
        $mail = new SendMail();
        $mail->sendMail(
          $email,
          "reset password",
          $tokenPw
        );
        header("Location: ../View/loading.php");
    }else{
        $_SESSION['error'] = "Email don't match";
        header("Location: ../View/updatePassword.php");
    }

    $_SESSION["m_admin"] = $sql->fetchAll(PDO::FETCH_ASSOC);
}
