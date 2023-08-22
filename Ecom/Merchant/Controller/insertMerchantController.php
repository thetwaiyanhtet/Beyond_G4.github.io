<?php
session_start();
ini_set('display_errors', 1);
if(isset($_POST['confirmPayment'])){
    $merchantName = $_SESSION['merchantName'];
    $merchantEmail = $_SESSION["merchant_ID"]; 
    $merchantPw = $_SESSION['password'];
    $selected_plan =$_SESSION['choosePlan'];
    $selected_payment = $_SESSION['select_payment'];
    $ran_id = rand(time(), 100000000); 

    echo $selected_plan;
    echo $merchantEmail;
    echo $merchantName;
    echo $merchantPw;
    echo $selected_payment;
    include "../Model/model.php";

    $enddate ;
    if ($selected_plan == 6) {
        $enddate = 30;
    } elseif($selected_plan == 7){
        $enddate = 180;
    }elseif($selected_plan == 8 ){
        $enddate = 360;
    }

    $sql2 = $pdo->prepare(
        "INSERT INTO m_merchant
        (
            m_name,
            email,
            password,
            plan_id,
            unique_id,
            plan_start_date,
            plan_end_date
        )
        VALUES
        (
           :merchantName,
           :merchantEmail,
           :merchantPw,
           :planID,
           :unique_id,
           :planStartDate,
           DATE_ADD(CURDATE(), INTERVAL $enddate DAY)
        )"
    );
    $sql2->bindValue(":merchantName",$merchantName);
    $sql2->bindValue(":merchantEmail",$merchantEmail);
    $sql2->bindValue(":planStartDate", date("Y_m_d"));
    $sql2->bindValue(":unique_id",$ran_id);
    $sql2->bindValue(":merchantPw",password_hash($merchantPw, PASSWORD_DEFAULT));
    $sql2->bindValue(":planID",$selected_plan);
    $sql2->execute();


    $merchantData = $pdo->prepare("SELECT * FROM m_merchant WHERE email=:email");
    $merchantData->bindValue(":email", $merchantEmail);
    $merchantData->execute();
    $merchantInfo = $merchantData-> fetchAll(PDO::FETCH_ASSOC);
    $merchantID = $merchantInfo[0]['id'];
    $uniqueID = $merchantInfo[0]['unique_id'];
    $_SESSION['merchantInfo'] = $merchantInfo;
    $_SESSION['unique_id'] = $uniqueID;

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