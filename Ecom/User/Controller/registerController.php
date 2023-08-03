<?php
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
    }
    //DB connection
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM user_acc WHERE email=:email"
    );
    $sql->bindValue(":email", $email);
    $sql->execute();

    $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultEmail) == 0) {
        $sql = $pdo->prepare(
            "INSERT INTO  user_acc
    (
        username,
        email,
        password
    )
    VALUES(
        :username,
        :email,
        :password
    )
    "
    );
        $sql->bindValue(":username", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
        $sql->execute();
        $sql->execute();
        header("Location: ../View/mainPage.php");
    } else {
        $_SESSION["registerError"] = "Email is already registered. Please use a different email.";
        header("Location: ../View/signUp.php");
    }
} else {
    header("Location: ../View/404page.php");
}
