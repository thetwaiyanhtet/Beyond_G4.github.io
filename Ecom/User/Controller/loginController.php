<?php
 session_start();
ini_set('display_errors', 1);
if(isset($_POST["login"])){
   $email = $_POST["email"];
   $password = $_POST["password"];
   echo $email;
   echo $password;

//    //DB connection
   include "../Model/model.php";

   $sql = $pdo ->prepare(
     "SELECT * FROM m_customer WHERE  email = :email"
   );
   $sql -> bindValue(":email", $email);
   $sql -> execute();
   $result = $sql->fetchAll(PDO::FETCH_ASSOC);
  //  echo "<pre>";
  //  print_r($result);
   
   if (count($result) == 0) {
    $_SESSION["loginerror"] = "Email not found!";
    header("Location: ../View/login.php");
   }else{
    if (password_verify($password,$result[0]["password"])) {
      $_SESSION["user_ID"] = $email;
      // echo($_SESSION["user_ID"]);
      header("Location: ../View/mainPage.php");
    }else {
      $_SESSION["loginerror"] = "Email or password incorrect!";
      header("Location: ../View/login.php");
    }
   }
 
}

else{
    header("Location: ../View/404page.php");
}
