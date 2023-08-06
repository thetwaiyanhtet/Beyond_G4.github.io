<?php
include "../Controller/common/generateVerification.php";
include "../Controller/common/mailSender.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
if (isset($_POST['send'])) {
  $email = $_POST["email"];
  include "../Model/model.php";
  $sql = $pdo->prepare("SELECT email FROM m_customer WHERE email =:userEmail");
  $sql->bindValue(":userEmail", $email);
  $sql->execute();
  $DBdata = $sql->fetchAll();
  $DBemail = $DBdata['email'];
  $_SESSION['eeee'] = $DBemail;
  $verify = generateVerificationNumber(4);
  $_SESSION['verificationCode'] = $verify;
  if ($DBdata) {
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
if (isset($_POST['verify'])) {
  $email =  $_SESSION['email'] ;
  $userInput = $_POST['number1'] . $_POST['number2'] . $_POST['number3'] . $_POST['number4'];

  if ($userInput == $_SESSION['verificationCode']) {
    header("Location: ../View/CreatNPw.php");
  }
}
if (isset($_POST['changePw'])) {
  $newPw = $_POST['newPw'];
  $confirmPw = $_POST['confirmPw'];
  $userEmail = $_SESSION['eeee'];

  if ($newPw !== $confirmPw) {
    $_SESSION['ERRORMESSAGE'] = "New password and confirm password do not match.";
    echo $_SESSION['ERRORMESSAGE'];
    exit();
  } else {
    $hash_newPw = password_hash($newPw, PASSWORD_DEFAULT);
    // $email = $_POST["email"];
    echo $hash_newPw;
    include "../Model/model.php";
    $sql = $pdo->prepare("UPDATE m_customer SET password=:newPassword WHERE email=:userEmail");
    $sql->bindValue(":userEmail",  $userEmail);
    echo $userEmail;
    $sql->bindValue(":newPassword", $hash_newPw); // Use hashed password here
    $sql->execute();
    header("Location: ../View/mainPage.php");
    exit();
  }
}
