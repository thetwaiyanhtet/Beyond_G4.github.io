<?php
session_start();
if (isset($_POST['verify']) || isset($_POST[''])) {
  $email =  $_SESSION['emailToVerify'];
  $userInput = $_POST['number1'] . $_POST['number2'] . $_POST['number3'] . $_POST['number4'];
  echo $userInput;
  echo $email;
  echo $_SESSION['verificationCode'];
  try {
    if ($userInput == $_SESSION['verificationCode']) {
      header("Location: ../View/CreatNPw.php");
    }
  } catch (PDOException $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
  }
}
?>
