<?php
include "../Controller/common/mailSender.php";
if (isset($_POST['send'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo $username;
    echo $email;
    echo $message;
    $mail = new SendMail();
    $mail->sendMail(
      $email,
      "verify",
      $username . ',' . $message
    );
    header("Location: ../View/contactUs.php");
}
?>