<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../Model/model.php";
if (isset($_POST['update'])) {
    $newPw = $_POST['newPw'];
    $confirmPw = $_POST['confirmPw'];
    $email =  $_SESSION['emailToVerify'];
    echo $email;
    echo $newPw;
    echo $confirmPw;

    if (strlen($newPw) && strlen($confirmPw) < 8) {
        $_SESSION['ERRORMESSAGE'] = "(Password must be a least 8 character.)";
        header("Location: ../View/CreatNPw.php");
    } elseif ($newPw != $confirmPw) {
        $_SESSION['ERRORMESSAGE'] = "New password and confirm password do not match.";
        header("Location: ../View/CreatNPw.php");
    } else {
        $sql = $pdo->prepare("UPDATE m_customer SET password=:updatePassword WHERE email=:email");
        $sql->bindValue(":updatePassword", password_hash($newPw, PASSWORD_DEFAULT));
        $sql->bindValue(":email", $email);
        $sql->execute();
        header("Location: ../View/mainPage.php");
    }
}
