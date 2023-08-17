<?php
 include "./common/mailSender.php";
 if (isset($_POST['invoice']) && isset($_POST['delivery'])) {
    $email = $_GET['email'];
    echo $email;
    $mail = new SendMail();
    // $mail->sendMail(
    //   $email,
    //   "reset password",
    //   $tokenPw
    // );
 }

?>