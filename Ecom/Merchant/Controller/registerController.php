<?php
session_start();
ini_set('display_errors', 1);
if(isset($_POST["register"])){
   $username = $_POST["name"];
   $email = $_POST["email"];
   $password = $_POST["password"];


   //DB connection
   include "../Model/model.php";

   //check duplicate email

   $sql = $pdo -> prepare(
    "SELECT * FROM m_merchant WHERE email=:email"
   );
   $sql ->bindValue(":email", $email);
   $sql -> execute();

   $resultEmail = $sql -> fetchAll(PDO::FETCH_ASSOC);

   if (count($resultEmail) == 0) {
    $sql = $pdo ->prepare(
        "INSERT INTO  m_merchant
        (
            m_name,
            email,
            password,
            create_date,
            update_date
        )
        VALUES(
            :username,
            :email,
            :password,
            :createDate,
            :updateDate
        )
        "
       );
       $sql -> bindValue (":username", $username);
       $sql -> bindValue (":email", $email);
       $sql -> bindValue (":password", password_hash($password, PASSWORD_DEFAULT));;
       $sql -> bindValue (":createDate", date("Y-m-d"));
       $sql -> bindValue (":updateDate", date("Y-m-d"));
       $sql->execute();
       header("Location: ../View/ChoosePlan.php");
   }else {
    $_SESSION["registerError"] = "Email is already registered. Please use a different email.";
    header("Location: ../View/signUp.php");
   }

}else{
    header("Location: ../View/404page.php");
}
$_SESSION["merchant_ID"] = $email;
?>