<?php
session_start();
// ini_set('display_errors', 1);
include "./common/mailSender.php";
include "./common/generatePwFunction.php";
if (isset($_POST["resetPw"])) {

  $email = $_POST["email"];
  include "../Model/model.php";
  $sql = $pdo->prepare("SELECT email FROM m_merchant WHERE email=:email");
  $sql->bindValue(":email", $email);
  $sql->execute();
  $DBemail = $sql->fetchColumn();
  if ($DBemail) {
    $tokenPw = generateRandomPassword();
    $sql = $pdo->prepare(
      "UPDATE m_merchant SET password = :token WHERE email =:email"
    );
    $sql->bindValue(":token", password_hash($tokenPw, PASSWORD_DEFAULT));
    $sql->bindValue(":email", $email);
    $sql->execute();
    echo "Successfully update password";

    //send email 
    $mail = new SendMail();
    $mail->sendMail(
      $email,
      "reset password",
      $tokenPw
    );
    header("Location: ../View/loading.php");
  } else {
   $_SESSION['error'] = "Email isn't mot match";
   header("Location: ../View/forgetPassword.php");
  }
} else {
  header("Location: ../View/404page.php");
}
