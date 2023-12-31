<?php
include "../Controller/common/emailFormatCheck.php";
session_start();
ini_set('display_errors', 1);
if (isset($_POST["register"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($email)) {
        $_SESSION["registerError"] = "Email field cannot be empty.";
        header("Location: ../View/signUp.php");
        exit(); // Stop further execution
    }elseif(strlen($password) < 8){
        $_SESSION["registerError"] = "Password must be at least 8 characters long.";
        header("Location: ../View/signUp.php");
    }else if (!isValidEmail($email)) {
        $_SESSION["registerError"] = "Invalid email format. Please enter a valid email address.";
        header("Location: ../View/signUp.php");
    }else{
          //DB connection
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM m_customer WHERE email=:email"
    );
    $sql->bindValue(":email", $email);
    $sql->execute();

    $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);
    $ran_id = rand(time(), 100000000); 

    if (count($resultEmail) == 0) {
        $sql = $pdo->prepare(
            "INSERT INTO  m_customer
    (
        username,
        email,
        password,
        unique_id
    )
    VALUES(
        :username,
        :email,
        :password,
        :unique_id
    )
    "
    );
        $sql->bindValue(":username", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":unique_id",$ran_id);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->execute();
        header("Location: ../View/mainPage.php");
    } else {
        $_SESSION["registerError"] = "Email is already registered. Please use a different email.";
        header("Location: ../View/signUp.php");
    }
    $_SESSION["user_ID"] = $email;
    }
} else {
    // header("Location: ../View/404page.php");
}
?>
