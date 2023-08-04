<?php 
session_start();
 //DB connection
 include "../Model/model.php";
    $userEmail=$_SESSION["user_ID"];

    $sql = $pdo->prepare(
        "SELECT * FROM m_customer WHERE email=:email"
    );
    $sql->bindValue(":email", $userEmail);
    echo($userEmail);
    $sql->execute();
    $_SESSION["user_data"] = $sql->fetch(PDO::FETCH_ASSOC);
    // $user_id = $user_data['id'];
    // echo ($_SESSION["user_data"]);


    

    header("Location: ../View/userProfileEditUpd.php");
?>