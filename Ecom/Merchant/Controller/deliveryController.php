<?php 
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_customer.username,m_order.generate_id,m_order.order_date,m_order.total_amt,m_delivery.delivery_name,m_order_details.quantity,m_product.sellprice as unit_price
    FROM m_customer 
    JOIN m_order
    ON m_order.customer_id = m_customer.id
    JOIN m_order_details
    ON m_order_details.order_id = m_order.generate_id
    JOIN m_delivery
    ON m_delivery.region_id = m_customer.region_id
    JOIN m_product
    ON m_product.id = m_order_details.product_id
    GROUP BY m_order.generate_id
    "
);

$sql->execute();

$deliveries = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($deliveries);
echo "</pre>";
?>