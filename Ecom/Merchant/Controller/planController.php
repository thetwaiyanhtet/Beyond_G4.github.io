<?php
session_start();
ini_set('display_errors', 1);

 if(isset($_POST['plan'])){
    $selectedPlan = $_POST['plan'];
    $_SESSION['choosePlan'] = $selectedPlan;
   header("Location: ../View/paymethod.php");
        
}else {
    header("Location: ../View/404page.php");
}
