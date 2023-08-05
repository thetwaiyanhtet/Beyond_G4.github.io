<?php
include "../Controller/common/generateVerification.php";
include "../Controller/common/mailSender.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['send'])) {
  $email = $_POST["email"];
  $checkEmail = $_SESSION["userEmail"];
  header("Location: ../View/Verify.php");
  $verify = generateVerificationNumber(4);
  $_SESSION['verificationCode'] = $verify;
  if ($email == $checkEmail) {
    $mail = new SendMail();
    $mail->sendMail(
      $email,
      "verify",
      $verify
    );
  }else{
    $_SESSION['error'] ="Email is not match";
  }
}
if (isset($_POST['verify'])) {
  $userInput = $_POST['number1'] . $_POST['number2'] . $_POST['number3'] . $_POST['number4'];

  if ($userInput == $_SESSION['verificationCode']) {
    header("Location: ../View/CreatNPw.php");
  }
}
if (isset($_POST['changePw'])) {
  if ($_SESSION['userEmail']) {
    echo 'data is carry';
  } else {
    echo 'data not carry';
  }
  $newPw = $_POST['newPw'];
  $confirmPw = $_POST['confirmPw'];
  $userEmail = $_SESSION['userEmail'];
  echo $userEmail;

  include "../Model/model.php";
  if ($newPw !== $confirmPw) {
    $_SESSION['ERRORMESSAGE'] = "New password and confirm password do not match.";
    echo $_SESSION['ERRORMESSAGE'];
    exit();
  } else {
    $hash_newPw = password_hash($newPw, PASSWORD_DEFAULT);
    $sql = $pdo->prepare("UPDATE m_customer SET password=:newPassword WHERE email=:userEmail");
    $sql->bindValue(":userEmail", $userEmail);
    $sql->bindValue(":newPassword", $hash_newPw); // Use hashed password here
    echo $userEmail;
    echo $newPw;
    $sql->execute();
    // header("Location: ../View/main.php");
    exit();
  }
}
