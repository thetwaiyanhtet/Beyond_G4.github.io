<?php
 session_start();
ini_set('display_errors', 1);
if(isset($_POST["login"])){
   $email = $_POST["email"];
   $password = $_POST["password"];

   //DB connection
   include "../Model/model.php";

   $sql = $pdo ->prepare(
     "SELECT * FROM m_merchant WHERE  email = :email"
   );
   $sql -> bindValue(":email", $email);
   $sql -> execute();
   $result = $sql->fetchAll(PDO::FETCH_ASSOC);
   
   if (count($result) == 0) {
    $_SESSION["loginerror"] = "Email not found!";
    header("Location: ../View/login.php");
   }else{
    if (password_verify($password,$result[0]["password"])) {
      header("Location: ../View/login.php");
    }else {
      $_SESSION["loginerror"] = "Email or password incorrect!";
      header("Location: ../View/login.php");
    }
   }
   $_SESSION["merchant_ID"] = $email;
   header("Location: ../View/dashboard.php");
}else{
    header("Location: ../View/404page.php");
}
