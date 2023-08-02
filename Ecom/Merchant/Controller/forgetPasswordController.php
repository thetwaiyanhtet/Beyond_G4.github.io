<?php
session_start();
// ini_set('display_errors', 1);
include "./common/mailSender.php";
include "./common/generatePwFunction.php";
if (isset($_POST["resetPw"])) {

  $email = $_POST["email"];
  echo $email;


  //DB connection
  include "../Model/model.php";

  //check email is exit or not

  $sql = $pdo->prepare(
    "SELECT * FROM m_admin WHERE email=:email"
  );
  $sql->bindValue(":email", $email);
  $sql->execute();

  $rowCount = $sql->rowCount();

  if ($rowCount > 0) {
    $tokenPw = generateRandomPassword();
    $sql = $pdo->prepare(
      "UPDATE m_admin SET password = :token WHERE email =:email"
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
  } else {
    echo "Email does not exit in database";
  }
  header("Location: ../View/dashboard.php");
} else {
  header("Location: ../View/404page.php");
}