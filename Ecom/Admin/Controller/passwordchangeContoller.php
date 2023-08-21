<?php
 session_start();
include "../Model/model.php";
// include "../Controller/common/passwordGenerate.php";

 $data = $_SESSION['adminInfo'];
$old_password = $_POST['current'];
$hashed_password = $data['login_password'];
$new_password = $_POST['new'];
$confirm_password = $_POST['confirm'];
// echo $old_password;
if (password_verify($old_password, $hashed_password)) {
    if ($new_password == $confirm_password) {
        $sql = $pdo->prepare(
            "UPDATE m_admin SET login_password = :password"
        );
        $sql->bindValue(":password", password_hash($new_password, PASSWORD_DEFAULT));
        $sql->execute();
        header("Location: ../View/updateProfileNPassword.php");
    } else {
        echo "New password and Comfrim password does not match.";
    }
} else {
    $_SESSION["error"] = "old pw is not same";
};
