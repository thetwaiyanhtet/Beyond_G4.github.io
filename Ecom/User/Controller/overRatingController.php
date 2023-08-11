<?php

// Connect to the database
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT 
    m_customer.username,
    m_cusreview.comment,
    AVG(m_cusreview.rating) as review_rating,
    COUNT(m_cusreview.customer_id) as customer_count
    FROM m_cusreview
    JOIN m_customer ON m_cusreview.customer_id = m_customer.id
    JOIN m_product ON m_cusreview.product_id = m_product.id
    WHERE m_product.id = 4
    GROUP BY m_customer.username, m_cusreview.comment
    ORDER BY review_rating "
);

$sql->execute();
$topComments = $sql->fetchAll(PDO::FETCH_ASSOC);

// Calculate the total sum of customer_count and average rating
$totalCustomerCount = 0;
$totalReviewRating = 0;
foreach ($topComments as $comment) {
    $totalCustomerCount += $comment['customer_count'];
    $totalReviewRating += $comment['review_rating'];
}

// Calculate the overall average rating
$overallAverageRating = $totalReviewRating / count($topComments);

// echo "<pre>";
// print_r($topComments);
// echo "Total Customer Count: " . $totalCustomerCount . "<br>";
// echo "Overall Average Rating: " . number_format($overallAverageRating, 1);
// echo "</pre>";
