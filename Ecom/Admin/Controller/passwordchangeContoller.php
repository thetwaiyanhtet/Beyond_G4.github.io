
<?php
session_start();

$admin = $_SESSION["m_admin"];

include "../Model/model.php";
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {
    $old_password = $_POST['current'];
    $new_password = $_POST['new'];
    $confirm_password = $_POST['confirm'];
    $hashed_password = $admin[0]['login_password'];
     
    if ($old_password == $hashed_password) {
            if ($new_password == $confirm_password) {
                $sqladmin = $pdo->prepare("UPDATE m_admin SET  login_password = '$new_password' ");
                $sqladmin->execute();
                echo '<script type="text/javascript">';
                echo 'alert("Password changed successfully!");';
                echo '</script>';
            }else {
                echo '<script type="text/javascript">';
                echo 'alert("New password and Comfrim password does not match.");';
                echo '</script>';
            }
    } else {
      echo '<script type="text/javascript">';
      echo 'alert("Incorrect current password. ");';
      echo '</script>';
    };
    header("Location: ../View/updateProfileNPassword.php");
};

?>
