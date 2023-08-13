<?php 
session_start();
include "../Model/model.php";

$userEmail = $_SESSION["user_ID"];

$sql = $pdo->prepare(
    "SELECT m_merchant.m_name,m_order.total_amt,m_product.name,m_product.p_one,m_merchant.store_name,m_order.generate_id,m_product.p_one,m_product.sellprice as unit_price
    FROM m_merchant
    JOIN m_order_details
    ON m_order_details.merchant_id = m_merchant.id
    JOIN m_order
    ON m_order.id = m_order_details.order_id
    JOIN m_customer
    ON m_customer.id = m_order.customer_id
    JOIN m_product
    ON m_product.id = m_order_details.product_id
    WHERE m_customer.email = :email
    -- GROUP BY m_merchant.id,m_order.generate_id
    "
);

$purchasedCountSql = $pdo->prepare(
    "SELECT COUNT(*) AS purchased_count 
        FROM m_order_details 
        JOIN m_order
        ON m_order.id = m_order_details.order_id 
        GROUP BY m_order_details.order_id"
);

// $imgSql = $pdo->prepare(
//     "SELECT p_one,m_order.generate_id
//     FROM m_product
//     JOIN m_order_details
//     ON m_order_details.product_id = m_product.id
//     JOIN m_order
//     ON m_order.id = m_order_details.order_id
//     GROUP BY m_product.id
//     "
// );

$sql->bindValue(":email",$userEmail);
$purchasedCountSql->execute();
$sql->execute();
// $imgSql->execute();

$purchasedCount = $purchasedCountSql->fetch(PDO::FETCH_ASSOC);
$orders = $sql->fetchAll(PDO::FETCH_ASSOC);
// $images = $imgSql->fetchAll(PDO::FETCH_ASSOC);



$ORDERS = [];
for ($i=0; $i < count($orders) ; $i++) { 
    if(!in_array($orders[$i]["generate_id"], $ORDERS))
    array_push($ORDERS, $orders[$i]["generate_id"]);
}

$ordertmp = [];

for ($i=0; $i < count($ORDERS) ; $i++) { 
    $ordertmp2 = [];
    for ($j=0 ; $j < count($orders)  ; $j++ ) { 
        if($ORDERS[$i] == $orders[$j]["generate_id"]){
            array_push($ordertmp2, $orders[$j]);
        }
    }
    array_push($ordertmp, $ordertmp2);
}

// $Images = [];
// for ($i = 0; $i < count($images); $i++) {
//     if (!in_array($images[$i]["generate_id"], $Images))
//         array_push($Images, $images[$i]["generate_id"]);
// }

// $imgtmp = [];

// for ($i = 0; $i < count($Images); $i++) {
//     $imgtmp2 = [];
//     for ($j = 0; $j < count($images); $j++) {
//         if ($Images[$i] == $images[$j]["generate_id"]) {
//             array_push($imgtmp2, $images[$j]);
//         }
//     }
//     array_push($imgtmp, $imgtmp2);
// }




// echo "<pre>";
// // print_r($orders);
// print_r($ordertmp);
// // print_r($purchasedCount);
// echo "</pre>";
?>