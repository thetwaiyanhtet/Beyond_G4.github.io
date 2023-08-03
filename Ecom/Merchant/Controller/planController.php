<?php
session_start();
ini_set('display_errors', 1);
 if(isset($_POST['plan'])){
    $selectedPlan = $_POST['plan'];
    echo $selectedPlan;
    $checkEmail =  $_SESSION["merchant_ID"];
    echo $checkEmail;
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "UPDATE m_merchant SET plan_id = :selectedPlan, plan_start_date =:plan_start_date,plan_end_date=:plan_end_date WHERE email=:checkEmail"

    );
    echo $selectedPlan;
    $sql->bindValue(':selectedPlan', $selectedPlan);
    $sql->bindValue(':checkEmail', $checkEmail);
    $sql->bindValue(':plan_start_date', date("Y-m-d"));
    $sql->bindValue(':plan_end_date', date("Y-m-d"));
    $sql->execute();
   
   
   header("Location: ../View/paymethod.php");
        
}else {
    header("Location: ../View/404page.php");
}

$_SESSION["selectedPlan"] = $selectedPlan;

?>