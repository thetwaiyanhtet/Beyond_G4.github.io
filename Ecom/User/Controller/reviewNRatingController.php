<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    include "../Model/model.php";

    $userEmail = $_SESSION["user_ID"];
    $orderId = $_POST["order_id"];
    $reviewText = $_POST["message"];

    $getDataSql = $pdo->prepare(
        "SELECT m_customer.id AS customer_id,m_order_details.merchant_id,m_order_details.product_id
        FROM m_order
        JOIN m_order_details
        ON m_order_details.order_id = m_order.id
        JOIN m_customer
        ON m_customer.id = m_order.customer_id
        WHERE m_order.generate_id = :orderId
        GROUP BY m_order.generate_id"
    );
    $getDataSql->bindValue(":orderId", $orderId);
    $getDataSql->execute();
    $getData = $getDataSql->fetch(PDO::FETCH_ASSOC);
    $_SESSION["data"] = $getData;

    $cusid = $getData["customer_id"];
    $merid = $getData["merchant_id"];
    $prodid = $getData["product_id"];
    $rating = $_POST["rating"];


    $insertReviewQuery = $pdo->prepare(
        "INSERT INTO 
        m_cusreview (customer_id,merchant_id,product_id,comment,rating,create_date) 
        VALUES 
        (:customerid,:merchantid,:productid,:review_text,:rating,NOW())"
    );

    $insertReviewQuery->bindValue(":customerid", $cusid);
    $insertReviewQuery->bindValue(":merchantid", $merid);
    $insertReviewQuery->bindValue(":productid", $prodid);
    $insertReviewQuery->bindValue(":review_text", $reviewText);
    $insertReviewQuery->bindValue(":rating", $rating);

    if ($insertReviewQuery->execute()) {
        $_SESSION["review_submitted"] = true;
        header("Location: ../View/user_history.php");

    } else {
        // Failed to submit review
        echo "Failed to submit review.";
    }

    
}
