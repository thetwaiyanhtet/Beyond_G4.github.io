<?php
session_start();
ini_set('display_errors', 1);
if (isset($_POST["payment"])) {
    $selected_payment = $_POST["payment"];
    echo $selected_payment;
    $merchantEmail = $_SESSION["merchant_ID"];
    $selected_plan = $_SESSION["selectedPlan"];
    echo $selected_plan;
    include "../Model/model.php";

    $sql= $pdo->prepare("SELECT id FROM m_merchant WHERE email = :email");
    $sql->bindValue(':email', $merchantEmail);
    echo $merchantEmail;
    $sql->execute();
    $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);
    $merchant_id = $merchant_data['id'];
    $sql = $pdo->prepare(
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
           :type,
           :createDate
        )"
    );
    $sql->bindValue(':merchantID', $merchant_id);
    $sql->bindValue(':planID',  $selected_plan);
    $sql->bindValue(':type', $selected_payment);
    $sql->bindValue(':createDate', date("Y-m-d"));

    $sql->execute();
    header("Location: ../View/dashboard.php");
} else {
    header("Location: ../View/404page.php");
}
?>