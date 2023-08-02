<?php
session_start();
ini_set('display_errors', 1);
 if(isset($_POST["plan"])){
    $selectedPlan = $_POST["plan"];
   
    try {
        include "../Model/model.php";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
   $checkEmail =  $_SESSION["merchant_ID"];
   $sql = $pdo ->prepare(
    "UPDATE merchant SET plan_id = $selectedPlan WHERE email='$checkEmail' "
   );
   $sql->execute();
   header("Location: ../View/paymethod.php");
        
}

?>