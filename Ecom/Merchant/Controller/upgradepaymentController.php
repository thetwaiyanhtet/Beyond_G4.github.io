<?php
session_start();
ini_set('display_errors', 1);
if (isset($_POST["payNow"])) {
    $_SESSION['select_payment'] = $_POST["payment"];
    header("Location: ../View/upgradepaymentsfl.php");
} else {
    header("Location: ../View/404page.php");
}
?>