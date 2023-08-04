<?php
session_start();

// DB Connection
include "../Model/model.php";

// Check if the customer ID is provided as a parameter in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $customerId = $_GET['id'];

    // Prepare the SQL query to select the customer details using the provided ID
    $sql = $pdo->prepare(
        "SELECT m_customer.id,m_customer.username,m_customer.email,m_customer.phone,m_townships.name 
        FROM m_customer 
        JOIN m_townships 
        ON m_customer.township_id = m_townships.id 
        WHERE m_customer.id = :id;");

    // Prepare the SQL query to count the number of orders for the provided customer_id
    $orderCountSql = $pdo->prepare(
        "SELECT COUNT(*) AS order_count 
        FROM m_order 
        WHERE customer_id = :id;"
    );

    $sumTotalAmountSql = $pdo->prepare(
        "SELECT SUM(total_amt) AS total_amount_sum
        FROM m_order
        WHERE customer_id =:id;"
    );

    $purchasedProductSql =$pdo->prepare(
        "SELECT product_id
        FROM m_order 
        WHERE customer_id = :id;"
    );

    $orderSql = $pdo->prepare(
        "SELECT m_order.merchant_id,m_order.total_amt,m_order.order_date,m_product.name,m_order.id,m_merchant.m_name
        FROM m_customer 
        JOIN m_order 
        ON m_customer.id = m_order.customer_id 
        JOIN m_product 
        ON m_order.product_id = m_product.product_id
        JOIN m_merchant
        ON m_order.merchant_id = m_merchant.id
        WHERE customer_id = :id;"
    );

    $sql->bindValue(":id", $customerId);
    $orderCountSql->bindValue(":id", $customerId);
    $sumTotalAmountSql->bindValue(":id", $customerId);
    $purchasedProductSql->bindValue(":id",$customerId);
    $orderSql->bindValue(":id", $customerId);

    $sql->execute();
    $orderCountSql->execute();
    $sumTotalAmountSql->execute();
    $purchasedProductSql->execute();
    $orderSql->execute();

    $customerDetail = $sql->fetch(PDO::FETCH_ASSOC);
    $orderCount = $orderCountSql->fetch(PDO::FETCH_ASSOC);
    $sumTotalAmount = $sumTotalAmountSql->fetch(PDO::FETCH_ASSOC);
    $purchasedProduct = $purchasedProductSql->fetch(PDO::FETCH_ASSOC);
    $orders = $orderSql->fetchAll(PDO::FETCH_ASSOC);

     echo "<pre>";
    // print_r($customerDetail);
    // print_r($orderCount);
    // print_r($sumTotalAmount);
    // print_r($purchasedProduct);
    // print_r($orders);
} else {
    // Handle the case when the customer ID is not provided or empty
    echo "Invalid customer ID!";
}
