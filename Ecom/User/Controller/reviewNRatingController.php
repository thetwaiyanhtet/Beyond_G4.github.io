<?php
session_start();
include "../Model/model.php";

$productId = $_POST["product_id"];
$reviewText = $_POST["message"];

$getDataSql = $pdo->prepare(
    "SELECT m_customer.id AS customer_id, m_order_details.merchant_id, m_order_details.product_id
    FROM m_order
    JOIN m_order_details ON m_order_details.order_id = m_order.id
    JOIN m_customer ON m_customer.id = m_order.customer_id
    WHERE m_order_details.product_id = :productId;"
);

$getDataSql->bindValue(":productId", $productId);
$getDataSql->execute();
$getData = $getDataSql->fetch(PDO::FETCH_ASSOC);

$cusid = $getData["customer_id"];
$merid = $getData["merchant_id"];
$prodid = $getData["product_id"];
$rating = $_POST["rating"];

// Check if the user has already submitted a review for the same product
$existingReviewQuery = $pdo->prepare(
    "SELECT COUNT(*) as review_count
    FROM m_cusreview
    WHERE customer_id = :customerid AND product_id = :productid"
);

$existingReviewQuery->bindValue(":customerid", $cusid);
$existingReviewQuery->bindValue(":productid", $prodid);
$existingReviewQuery->execute();

$existingReviewData = $existingReviewQuery->fetch(PDO::FETCH_ASSOC);

if ($existingReviewData['review_count'] > 0) {
    // User has already submitted a review for this product
    $_SESSION["review_already_submitted"] = true;
    header("Location: ../View/user_history.php");
    exit();
}

// If no existing review, proceed with inserting the new review
$insertReviewQuery = $pdo->prepare(
    "INSERT INTO 
    m_cusreview (customer_id, merchant_id, product_id, comment, rating, create_date) 
    VALUES 
    (:customerid, :merchantid, :productid, :review_text, :rating, NOW())"
);

$insertReviewQuery->bindValue(":customerid", $cusid);
$insertReviewQuery->bindValue(":merchantid", $merid);
$insertReviewQuery->bindValue(":productid", $prodid);
$insertReviewQuery->bindValue(":review_text", $reviewText);
$insertReviewQuery->bindValue(":rating", $rating);
$insertReviewQuery->execute();

$_SESSION["review_submitted"] = true;
header("Location: ../View/user_history.php");
exit();
