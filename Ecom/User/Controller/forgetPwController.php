<?php
include "../Controller/common/mailSender.php";
include "../Controller/common/generateVerification.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
if (isset($_POST['send'])) {
  $email = $_POST["email"];
  include "../Model/model.php";
  $sql = $pdo->prepare("SELECT email FROM m_customer WHERE email = :userEmail");
  $sql->bindValue(":userEmail", $email);
  $sql->execute();
  $DBemail = $sql->fetchColumn();
  $verify = generateVerificationNumber(4);
  $_SESSION['verificationCode'] = $verify;
  if ($DBemail) {
    $_SESSION['emailToVerify'] = $email; 
    header("Location: ../View/Verify.php");
    $mail = new SendMail();
    $mail->sendMail(
      $email,
      "verify",
      $verify
    );
  } else {
    $_SESSION['error'] = " is not match";
    header("Location: ../View/forgetPw.php");
  }
}

