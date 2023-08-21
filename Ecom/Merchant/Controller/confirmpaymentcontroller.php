<?php
session_start();
include "../Controller/dateplusController.php";
ini_set('display_errors', 1);
if(isset($_POST['confirmPayment'])){
    $merchantEmail = $_SESSION["merchant_ID"]; 
    $selected_plan = $_SESSION["selectedPlan"];
    $selected_payment = $_SESSION['select_payment'];
    
    $enddate ;
    if ($selected_plan == 6) {
        $enddate = 30 + $daysRemaining;
    } elseif($selected_plan == 7){
        $enddate = 180 + $daysRemaining;
    }elseif($selected_plan == 8 ){
        $enddate = 360 + $daysRemaining;
    }

    include "../Model/model.php";
  echo $enddate;
    $sql2 = $pdo->prepare(
        "UPDATE `m_merchant` 
        SET `plan_id`=:planID,
        `plan_start_date`= :planStart,
        `plan_end_date`= DATE_ADD(CURDATE(), INTERVAL $enddate DAY) WHERE m_merchant.email = :merchantEmail;
        "
    );

    $sql2->bindValue(":merchantEmail",$merchantEmail);
    $sql2->bindValue(":planID",$selected_plan);
    $sql2->bindValue(":planStart",date('Y-m-d'));
    // $sql2->bindValue(":planEnd",date('Y-m-d'));
    $sql2->execute();


    $merchantData = $pdo->prepare("SELECT id FROM m_merchant WHERE email=:email");
    $merchantData->bindValue(":email", $merchantEmail);
    $merchantData->execute();
    $merchantID = $merchantData->fetchColumn();
    echo $merchantID;



    $sql2 = $pdo->prepare(
        "INSERT INTO m_payment
        (
            merchant_id,
            plan_id,
            type,
            create_date
        )
        VALUES
        (
           :merchantID,
           :planID,
           :payment,
           :createDate
        )"
    );
    $sql2->bindValue(":merchantID", $merchantID);
    $sql2->bindValue(":planID", $selected_plan);
    $sql2->bindValue(":payment", $selected_payment);
    $sql2->bindValue(":createDate",date('Y-m-d'));
    $sql2->execute();

    header("Location: ../View/dashboard.php");
} else {
    header("Location: ../View/404page.php");
}

?>