<?php
// session_start();
// DB Connection
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
echo $merchantEmail;

$saleSql = $pdo->prepare(
    "SELECT SUM(m_product.sellprice) as totalSales, SUM(m_product.buyprice) as totalCost,
    SUM(instock) as quantityOnHand,COUNT(category_id) as NumberOfCategories
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id
    JOIN m_admin_category
    ON m_product.category_id=m_admin_category.id
    WHERE m_merchant.email = :email"
);

$saleSql->bindValue(':email', $merchantEmail);

$saleSql->execute();

$result = $saleSql->fetch(PDO::FETCH_ASSOC);

// Calculate profit
$totalSales = $result['totalSales'];
$totalCost = $result['totalCost'];
$profit = $totalSales - $totalCost;

// echo "<pre>";
// print_r($result);
// echo "Profit: $profit<br>";
// echo "</pre>";


$categoryCountSql = $pdo->prepare(
    "SELECT COUNT(DISTINCT m_product.category_id) AS category_count
    FROM m_product
    JOIN m_merchant ON m_product.merchant_id = m_merchant.id
    JOIN m_admin_category ON m_product.category_id = m_admin_category.id
    WHERE m_merchant.email = :email"
);

$categoryCountSql->bindValue(':email', $merchantEmail);

$categoryCountSql->execute();
$categoryCountResult = $categoryCountSql->fetch(PDO::FETCH_ASSOC);

$totalCategoryCount = $categoryCountResult['category_count'];

// echo "Total distinct category count: " . $totalCategoryCount;


$averageReviewSql = $pdo->prepare(
    "SELECT ROUND(AVG(m_cusreview.rating), 1) as review_rating
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id
    JOIN m_cusreview 
    ON m_cusreview.merchant_id = m_merchant.id
    WHERE m_merchant.email = :email"
);

$averageReviewSql->bindValue(':email', $merchantEmail);

$averageReviewSql->execute();

$averageReview = $averageReviewSql->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($averageReview);
// echo "</pre>";


$reviewSql = $pdo->prepare(
    "SELECT m_cusreview.rating,COUNT(m_cusreview.rating) as review_count
     FROM  m_cusreview
     JOIN m_merchant
     ON m_cusreview.merchant_id=m_merchant.id
    WHERE m_merchant.email = :email
    GROUP BY m_cusreview.rating
"

);

$reviewSql->bindValue(':email', $merchantEmail);
$reviewSql->execute();

$_SESSION["reviewCustomers"] = $reviewSql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($_SESSION["reviewCustomers"]);
// echo "</pre>";



$topCustomersSql = $pdo->prepare(
    "SELECT m_order.customer_id,m_customer.username,COUNT(m_order.customer_id) as customer_count,m_customer.p_picture
    FROM m_order
    JOIN m_order_details ON m_order_details.order_id = m_order.id
    JOIN m_merchant ON m_order_details.merchant_id = m_merchant.id
    JOIN m_customer ON m_order.customer_id=m_customer.id
    WHERE m_merchant.email = :email
    GROUP BY m_order.customer_id
    limit 3"
);

$topCustomersSql->bindValue(':email', $merchantEmail);
$topCustomersSql->execute();

$topCustomers = $topCustomersSql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($topCustomers);
// echo "</pre>";


$planSql = $pdo->prepare(
    "SELECT m_plan.plan_name, m_merchant.create_date
    FROM m_merchant
    JOIN m_plan ON m_merchant.plan_id = m_plan.id
    WHERE m_merchant.email = :email"
);

$planSql->bindValue(':email', $merchantEmail);
$planSql->execute();


$planSql = $pdo->prepare(
    "SELECT m_plan.plan_name, m_merchant.plan_start_date
    FROM m_merchant
    JOIN m_plan ON m_merchant.plan_id = m_plan.id
    WHERE m_merchant.email = :email"
);

$planSql->bindValue(':email', $merchantEmail);
$planSql->execute();

$merchantPlans = $planSql->fetchAll(PDO::FETCH_ASSOC);

foreach ($merchantPlans as $merchantPlan) {
    $planName = $merchantPlan['plan_name'];
    $createDate = new DateTime($merchantPlan['plan_start_date']);
    $endDate = clone $createDate;
    $endDate->modify($planName);

    $currentDate = new DateTime();
    $interval = $currentDate->diff($endDate);

    $daysRemaining = $interval->days;

    // echo "Plan: $planName<br>";
    // echo "Days Remaining: $daysRemaining days<br>";
}



$topSellingProductSql = $pdo->prepare(
    "SELECT m_product.id, m_product.name, COUNT(m_order_details.product_id) as total_sold,m_product.sellprice,
    m_product.instock
    FROM m_product
    JOIN m_order_details ON m_order_details.product_id = m_product.id
    JOIN m_merchant ON m_order_details.merchant_id = m_merchant.id
    WHERE m_merchant.email = :email
    GROUP BY m_product.id, m_product.name
    ORDER BY total_sold DESC
    limit 3"
);

$topSellingProductSql->bindValue(':email', $merchantEmail);
$topSellingProductSql->execute();

$topSellingProducts = $topSellingProductSql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($topSellingProducts);
// echo "</pre>";

$lowQuantitySql = $pdo->prepare(
    "SELECT m_product.id, m_product.instock, m_product.p_one, m_product.name
    FROM m_product
    JOIN m_merchant ON m_product.merchant_id = m_merchant.id
    WHERE m_merchant.email = :email AND m_product.instock < 10
    limit 3"
);

$lowQuantitySql->bindValue(':email', $merchantEmail);
$lowQuantitySql->execute();

$lowQuantity = $lowQuantitySql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($lowQuantity);
// echo "</pre>";

$deliverySql = $pdo->prepare(
    "SELECT m_order_details.delivery_status, COUNT(*) AS product_count
    FROM m_order_details
    JOIN m_merchant ON m_order_details.merchant_id = m_merchant.id
    WHERE m_merchant.email = :email
    GROUP BY m_order_details.delivery_status"
);

$deliverySql->bindValue(':email', $merchantEmail);
$deliverySql->execute();

$deliveryCounts = $deliverySql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($deliveryCounts);
// echo "</pre>";

$earnProfitSql = $pdo->prepare(
    "SELECT 
        m_order.order_date AS order_month,
        SUM(m_product.sellprice - m_product.buyprice) AS totalProfit
    FROM m_order
    JOIN m_order_details ON m_order_details.order_id = m_order.id
    JOIN m_merchant ON m_order_details.merchant_id = m_merchant.id
    JOIN m_product ON m_order_details.product_id = m_product.id
    WHERE m_merchant.email = :email
    GROUP BY order_month"
);

$earnProfitSql->bindValue(':email', $merchantEmail);
$earnProfitSql->execute();

$earnProfit = $earnProfitSql->fetchAll(PDO::FETCH_ASSOC);

$totalProfit = 0;


foreach ($earnProfit as $result1) {
    $orderMonth = $result1['order_month'];
    $totalProfit += $result1['totalProfit'];

    // echo "Month: $orderMonth<br>";
    // echo "Total Profit: " . $result1['totalProfit'] . "<br>";
    // echo "<br>";
}

// echo "Total Profit for All Months: $totalProfit<br>";
// echo "</pre>";


