<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    include "../Model/model.php";

    $sql = $pdo -> prepare(
        "SELECT  m_merchant.store_name,m_order.order_date,m_delivery.delivery_fees,m_delivery.create_date,
        m_delivery.delivery_name, m_customer.username,m_customer.email,m_customer.phone,m_customer.street,m_townships.t_name,
        m_regions.r_name,m_product.name,m_order_details.quantity,m_product.sellprice,m_order.total_amt
        From m_order_details 
        JOIN m_order
        ON  m_order_details.order_id = m_order.id
        JOIN m_product 
        ON m_product.id = m_order_details.product_id
        JOIN m_customer 
        ON m_order.customer_id = m_customer.id
        JOIN m_merchant
        ON m_order_details.merchant_id = m_merchant.id
        JOIN m_townships
        ON m_customer.township_id = m_townships.id
        JOIN m_regions
        ON m_customer.region_id = m_regions.id
        JOIN m_delivery 
        ON m_delivery.region_id = m_regions.id
        WHERE m_order_details.order_id = :id"
    );
    $sql->bindValue(":id",$order_id);
    $sql->execute();
    $orderDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($orderDetail);
    // echo "</pre>";
    
}
