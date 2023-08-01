<?php
session_start();
// ini_set('display_errors', 1);
 include "./common/mailSender.php";
 include "./common/generatePwFunction.php";
if(isset($_POST["resetPw"])){
  
   $email = $_POST["email"];


   //DB connection
   include "../Model/model.php";

   //check email is exit or not

   $sql = $pdo -> prepare(
    "SELECT * FROM m_admin WHERE email=:email"
   );
   $sql ->bindValue(":email", $email);
   $sql -> execute();

   $rowCount = $sql -> rowCount();

   if($rowCount > 0){
    $tokenPw = generateRandomPassword();
     $sql = $pdo->prepare(
      "UPDATE m_admin SET password = :token WHERE email =:email"
     );
     $sql -> bindValue(":token", $tokenPw);
     $sql ->bindValue(":email", $email);
     $sql -> execute();
     echo "Successfully update password";

     //send email 
     $mail = new SendMail();
     $mail -> sendMail(
      $tokenPw,
      "reset password",
      "<a href='https://www.apple.com'>Apple</a>"
     );

   }else{
    echo "Email does not exit in database";
   }

}else{
    // header("Location: ../View/404page.php");
}
