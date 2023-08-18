<?php
// session_start();
$merchantEmail = $_SESSION["merchant_ID"];
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT plan_end_date,plan_name FROM m_merchant JOIN m_plan
    ON plan_id = m_plan.id WHERE m_merchant.email = :id"
);

$sql->bindValue(":id", $merchantEmail);
$sql->execute();

$_SESSION["plancheck"] = $sql->fetchAll(PDO::FETCH_ASSOC);


//  header("Location: ../View/reviewandratingcopy.php ");
