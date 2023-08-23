<?php
//DB connection
include "../Model/model.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $productId = $_GET["id"];

    $sql = $pdo->prepare(
        "SELECT m_product.name,m_product.sellprice,m_product.instock,m_merchant.store_name,m_product.id,m_product.p_one,m_product.p_two,
    m_product.p_three,m_product.p_four,m_product.create_date,m_product.instock,m_admin_category.c_name,m_product.color_1,m_product.color_2,m_product.color_3,m_product.color_4
    FROM m_product
    JOIN m_merchant
    ON m_product.merchant_id = m_merchant.id
    JOIN m_admin_category
    ON m_admin_category.id = m_product.category_id
    WHERE m_product.id = :id;"
    );

    $sql->bindValue(":id", $productId);
    $sql->execute();

    $productDetail = $sql->fetch(PDO::FETCH_ASSOC);
}

// echo "<pre>";
// print_r($productDetail);
// echo "</pre>";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $productId = $_GET["id"];
    $sql = $pdo->prepare(
        "SELECT 
    m_customer.username,
    m_cusreview.comment,
    m_customer.p_picture,
    AVG(m_cusreview.rating) as review_rating,
    COUNT(m_cusreview.customer_id) as customer_count
    FROM m_cusreview
    JOIN m_customer ON m_cusreview.customer_id = m_customer.id
    JOIN m_product ON m_cusreview.product_id = m_product.id
    WHERE m_product.id = :id
    GROUP BY m_customer.username, m_cusreview.comment
    ORDER BY review_rating "
    );
    $sql->bindValue(":id", $productId);
    $sql->execute();
    $topComments = $sql->fetchAll(PDO::FETCH_ASSOC);

    /// ... your existing code ...

    // Calculate the total sum of customer_count and average rating
    $totalCustomerCount = 0;
    $totalReviewRating = 0;
    foreach ($topComments as $comment) {
        $totalCustomerCount += $comment['customer_count'];
        $totalReviewRating += $comment['review_rating'];
    }

    // Calculate the overall average rating
    $overallAverageRating = 0; // Initialize with 0 to handle no comments case
    if (count($topComments) > 0) {
        $overallAverageRating = $totalReviewRating / count($topComments);
    }
}
