<?php
session_start();
ini_set('display_errors', 1);

if (isset($_POST['update'])) {
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $checkEmail = $_SESSION["merchant_ID"];

    include "../Model/model.php";
    $sql = $pdo->prepare("SELECT password FROM m_merchant WHERE email=:checkEmail");
    $sql->bindValue(':checkEmail', $checkEmail);
    $sql->execute();
    $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);

    if ($merchant_data) {
        $passwordDB = $merchant_data['password'];

        // Verify the old password using password_verify()
        if (password_verify($oldPassword, $passwordDB)) {
            if ($newPassword !== $confirmPassword) {
                $_SESSION['ERRORMESSAGE2'] = "New password and confirm password do not match.";
                echo $_SESSION['ERRORMESSAGE2'];
            } else {
                // Hash the new password and update it in the database
                $hash_newPw = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = $pdo->prepare("UPDATE m_merchant SET password=:newPassword WHERE email=:checkEmail");
                $sql->bindValue(':newPassword', $hash_newPw);
                $sql->bindValue(':checkEmail', $checkEmail);
                $sql->execute();
                header("Location: ../View/dashboard.php");
            }
        } else {
            $_SESSION['ERRORMESSAGE'] = "Incorrect old password";
            echo $_SESSION['ERRORMESSAGE'];
        }
    }
}
?>
