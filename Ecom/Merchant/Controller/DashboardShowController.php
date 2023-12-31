<?php
// session_start();
// DB Connection
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];
// echo $merchantEmail;

$saleSql = $pdo->prepare(
    "SELECT SUM(m_product.sellprice) as totalSales, SUM(m_product.buyprice) as totalCost,
    SUM(instock) as quantityOnHand,COUNT(category_id) as NumberOfCategories
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id
    JOIN m_admin_category
    ON m_product.category_id=m_admin_category.id
    WHERE m_merchant.email = :email and m_product.del_flg = 0"
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

$profitSaleSql = $pdo->prepare(
    "SELECT m_product.sellprice, m_product.buyprice, SUM(m_order_details.quantity) as quantityOnHand
    FROM m_order_details
    JOIN m_merchant
    ON m_order_details.merchant_id = m_merchant.id
    JOIN m_product
    ON m_order_details.product_id = m_product.id
    WHERE m_merchant.email = :email
    GROUP BY m_product.sellprice, m_product.buyprice"
);


$profitSaleSql->bindValue(':email', $merchantEmail);

$profitSaleSql->execute();

$Profitresult = $profitSaleSql->fetchAll(PDO::FETCH_ASSOC);

$totalProfitSell = 0;
$totalProfitBuy = 0;

foreach ($Profitresult as $row) {
    $sellPrice = $row['sellprice'];
    $buyPrice = $row['buyprice'];
    $quantityOnHand = $row['quantityOnHand'];

    $productProfitSell = $sellPrice * $quantityOnHand;
    $totalProfitSell += $productProfitSell;
 
    $productProfitBuy = $buyPrice * $quantityOnHand;
    $totalProfitBuy += $productProfitBuy;
    $TotalProfit =$totalProfitSell - $totalProfitBuy;
}

// echo "Total Profit from Selling Price: $totalProfitSell<br>";
// echo "Total Profit from Buying Price: $totalProfitBuy<br>";
// echo "Total Profit : $TotalProfit<br>";


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


// $planSql = $pdo->prepare(
//     "SELECT m_plan.plan_name, m_merchant.create_date
//     FROM m_merchant
//     JOIN m_plan ON m_merchant.plan_id = m_plan.id
//     WHERE m_merchant.email = :email"
// );

// $planSql->bindValue(':email', $merchantEmail);
// $planSql->execute();


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
    
    // Calculate the interval between current date and plan end date
    $interval = $currentDate->diff($planEndDate);
    
    // Calculate days remaining (invert the interval if end date is in the past)
    $daysRemaining = $interval->invert === 0 ? $interval->days : 0;
    
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
    "SELECT 
        COUNT(DISTINCT CASE WHEN od.delivery_status = 1 THEN od.order_id END) AS total_delivery_status_1,
        COUNT(DISTINCT CASE WHEN od.delivery_status = 0 THEN od.order_id END) AS total_delivery_status_0
    FROM m_order_details AS od
    JOIN m_merchant AS m ON od.merchant_id = m.id
    WHERE m.email = :email AND (od.delivery_status = 0 OR od.delivery_status = 1)"
);

$deliverySql->bindValue(':email', $merchantEmail);
$deliverySql->execute();

$row = $deliverySql->fetch(PDO::FETCH_ASSOC);
$totalDeliveryStatus1 = $row['total_delivery_status_1'];
$totalDeliveryStatus0 = $row['total_delivery_status_0'];

// echo "Total Delivery Status 1 (Distinct Order IDs): " . $totalDeliveryStatus1;
// echo "Total Delivery Status 0 (Distinct Order IDs): " . $totalDeliveryStatus0;





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


