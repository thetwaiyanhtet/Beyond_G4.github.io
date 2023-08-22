<?php
session_start();

// DB Connection
include "../Model/model.php";

// Check if the customer ID is provided as a parameter in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $customerId = $_GET['id'];

    // Prepare the SQL query to select the customer details using the provided ID
    $sql = $pdo->prepare(
        "SELECT m_customer.id,m_customer.username,m_customer.email,m_customer.phone,m_townships.t_name,m_regions.r_name,m_customer.street
        FROM m_customer 
        JOIN m_townships 
        ON m_customer.township_id = m_townships.id 
        JOIN m_regions
        ON m_customer.region_id = m_regions.id
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

    $purchasedCountSql = $pdo->prepare(
        "SELECT SUM(m_order_details.quantity) AS purchased_count
        FROM m_order_details 
        JOIN m_order ON m_order.id = m_order_details.order_id 
        WHERE m_order.customer_id = :id;"
    );


    $orderSql = $pdo->prepare(
        "SELECT m_product.name,m_merchant.store_name,m_order.total_amt,m_order.order_date,m_order_details.delivery_status,m_order.generate_id
        FROM m_order
        JOIN m_customer 
        ON m_customer.id = m_order.customer_id
        JOIN m_order_details
        ON m_order_details.order_id = m_order.id
        JOIN m_product
        ON m_product.id = m_order_details.product_id
        JOIN m_merchant
        ON m_merchant.id = m_order_details.merchant_id
        WHERE customer_id = :id
        GROUP BY m_order.generate_id "
    );

    $productsSql = $pdo->prepare(
        "SELECT m_order_details.merchant_id,m_order.total_amt,m_order.order_date,m_product.name,m_order.generate_id,m_merchant.store_name,m_product.p_one,m_product.sellprice as unit_price
        FROM m_customer 
        JOIN m_order 
        ON m_customer.id = m_order.customer_id 
        JOIN m_order_details
        ON m_order_details.order_id = m_order.id
        JOIN m_product 
        ON m_order_details.product_id = m_product.id
        JOIN m_merchant
        ON m_order_details.merchant_id = m_merchant.id
        WHERE customer_id = :id;"
    );

    $sql->bindValue(":id", $customerId);
    $orderCountSql->bindValue(":id", $customerId);
    $sumTotalAmountSql->bindValue(":id", $customerId);
    $purchasedCountSql->bindValue(":id",$customerId);
    $orderSql->bindValue(":id", $customerId);
    $productsSql->bindValue(":id", $customerId);

    $sql->execute();
    $orderCountSql->execute();
    $sumTotalAmountSql->execute();
    $purchasedCountSql->execute();
    $orderSql->execute();
    $productsSql->execute();

    $customerDetail = $sql->fetch(PDO::FETCH_ASSOC);
    $orderCount = $orderCountSql->fetch(PDO::FETCH_ASSOC);
    $sumTotalAmount = $sumTotalAmountSql->fetch(PDO::FETCH_ASSOC);
    $purchasedCount = $purchasedCountSql->fetch(PDO::FETCH_ASSOC);
    $orders = $orderSql->fetchAll(PDO::FETCH_ASSOC);
    $products = $productsSql->fetchAll(PDO::FETCH_ASSOC);

    //  echo "<pre>";
    // print_r($customerDetail);
    // print_r($orderCount);
    // print_r($sumTotalAmount);
    // print_r($purchasedProduct);
    // print_r($orders);
    // print_r($products);
    //print_r($purchasedCount);
    
} else {
    // Handle the case when the customer ID is not provided or empty
    echo "Invalid customer ID!";
}
