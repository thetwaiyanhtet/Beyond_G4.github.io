<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['login'])) {
    $adminEmail = $_POST['email'];
    $password = $_POST['password'];

    echo $adminEmail;
    echo $password;


    include "../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM m_admin WHERE email=:email"
    );
    $sql->bindValue(':email', $adminEmail, PDO::PARAM_STR);
    $sql->execute();
    $result = $sql->fetch();
    $DBemail = $result['email'];
    $DBpassword = $result['login_password'];

    if ($DBemail !== $adminEmail) {
        $_SESSION['ErrorMessage'] = "Email not match";
        header("Location: ../View/login.php");
        exit();
    }else {
        if (password_verify($password,$DBpassword)) {
            header("Location: ../View/dashboard.php");
            exit();
        } else {
            $_SESSION["ErrorMessage"] = "Email or password incorrect!";
            header("Location: ../View/login.php");
            exit(); // Add exit() to stop further execution of the script
        }
    }
}else{
    header("Location: ../View/404page.php");
    exit();
}
?>