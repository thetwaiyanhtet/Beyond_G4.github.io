<?php
include "./common/mailSender.php";
include "./common/generatePwFunction.php";
//DB Connection
include "../Model/model.php";
session_start();
if (isset($_POST['update'])) {
    $email =   $_POST['email'];

    $sql = $pdo->prepare("SELECT email FROM m_admin WHERE email=:email");
    $sql->bindValue(":email", $email);
    $sql->execute();
    $DBemail = $sql->fetchColumn();
    echo $DBemail;

    if($DBemail){
        $tokenPw = generateRandomPassword();
        $sql = $pdo->prepare(
          "UPDATE m_admin SET login_password = :token WHERE email =:email"
        );
        $sql->bindValue(":token", password_hash($tokenPw, PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->execute();
        echo "Successfully update password";
    
        //send email 
        $mail = new SendMail();
        $mail->sendMail(
          $email,
          "Admin reset password",
          $tokenPw
        );
        header("Location: ../View/loading.php");
    }else{
        $_SESSION['error'] = "Email don't match";
        header("Location: ../View/updatePassword.php");
    }

    $_SESSION["m_admin"] = $sql->fetchAll(PDO::FETCH_ASSOC);
}
