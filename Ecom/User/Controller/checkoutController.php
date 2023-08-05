<?php
//print_r($_POST);
session_start();
$_SESSION['carted'] = $_POST;

header('Location: ../View/deliver.php');


?>