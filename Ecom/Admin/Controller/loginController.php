<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['login'])) {
    $adminEmail = $_POST['email'];
    $password = $_POST['password'];
    
    $hash = 'beyond';
    $hashpaswprd = password_hash($hash,PASSWORD_DEFAULT);
    echo $hashpaswprd;

    include "../Model/model.php";
    $sql = $pdo->prepare(
        "SELECT * FROM m_admin WHERE email=:email"
    );
    $sql->bindValue(':email', $adminEmail);
    $sql->execute();
    $result = $sql->fetch();
    
    if ($result) {
        $DBemail = $result['email'];
        $DBpassword = $result['login_password'];

        if (password_verify($password, $DBpassword)) {
            header("Location: ../View/dashboard.php");
        } else {
            $_SESSION['ErrorMessage'] = "Password isn't match";
            header("Location: ../View/login.php");
        }
      $_SESSION["adminInfo"] = $result;
    } else {
        $_SESSION['ErrorMessage'] = "Email not exit";
        header("Location: ../View/login.php");
    } 
}else{
    header("Location: ../View/404page.php");
    exit();
}
?>