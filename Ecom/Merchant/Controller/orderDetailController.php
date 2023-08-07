<?php
session_start();
include "../Model/model.php";

// Check if the customer ID is provided as a parameter in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $selectedOrder = $_GET['id'];
    $merchantEmail = $_SESSION["merchant_ID"];
echo $selectedOrder;
echo $merchantEmail;
    $sql = $pdo->prepare(
        "SELECT m_customer.username,m_order.order_date,m_order.total_amt,m_order.payment_id,m_customer.phone,m_customer.street,
        m_townships.t_name,m_product.p_one,m_order_details.quantity,m_product.sellprice,m_product.name,m_regions.r_name
        FROM m_order
        JOIN m_customer
        ON m_order.customer_id = m_customer.id
        JOIN m_order_details 
        ON m_order_details.order_id = m_order.id
        JOIN m_townships
        ON m_townships.id = m_customer.township_id
        JOIN m_regions 
        ON m_regions.id = m_customer.region_id
        JOIN m_delivery
        ON m_delivery.region_id = m_regions.id
        JOIN m_product
        ON m_product.id = m_order_details.product_id
        JOIN m_merchant
        ON m_merchant.id = m_order.merchant_id
        WHERE m_order.generate_id =:id AND m_merchant.email=:email;"
        
    );

    $sql->bindValue(":id",$selectedOrder);
    $sql->bindValue(":email", $merchantEmail);
    
    $sql->execute();

    $orderDetails = $sql->fetchAll(PDO::FETCH_ASSOC);

} else {
    // Handle the case when the customer ID is not provided or empty
    echo "Invalid customer ID!";
}

echo "<pre>";
print_r($orderDetails);
echo "</pre>";

