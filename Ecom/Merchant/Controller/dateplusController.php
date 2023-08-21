<?php

include "../Model/model.php";
$merchantEmail = $_SESSION["merchant_ID"];
$planSql = $pdo->prepare(
    "SELECT m_plan.plan_name, m_merchant.plan_start_date, m_merchant.plan_end_date
    FROM m_merchant
    JOIN m_plan ON m_merchant.plan_id = m_plan.id
    WHERE m_merchant.email = :email"
);

 $planSql->bindValue(':email', $merchantEmail);
$planSql->execute();

$merchantPlans = $planSql->fetchAll(PDO::FETCH_ASSOC);

foreach ($merchantPlans as $merchantPlan) {
    $planName = $merchantPlan['plan_name'];
    $planStartDate = new DateTime($merchantPlan['plan_start_date']);
    $planEndDate = new DateTime($merchantPlan['plan_end_date']);

    $currentDate = new DateTime();
    $interval = $currentDate->diff($planEndDate);
    $daysRemaining = $interval->invert === 0 ? $interval->days : 0;
    
}

?>