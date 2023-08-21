<?php
include "../Model/model.php";

if (isset($_GET["generate_id"])) {
    $selectedOrder = $_GET["generate_id"];

    // Fetch delivery details based on generate_id
    $fetchDetailsSql = $pdo->prepare(
        "SELECT m_customer.username,m_customer.street,m_townships.t_name,m_regions.r_name,m_customer.phone,m_order.order_date,
        m_order.total_amt,m_delivery.delivery_name,m_delivery.delivery_fees
        FROM m_customer
        JOIN m_order
        ON m_order.customer_id = m_customer.id
        JOIN m_townships
        ON m_townships.id = m_customer.township_id
        JOIN m_regions
        ON m_regions.id = m_townships.region_id
        JOIN m_delivery
        ON m_delivery.region_id = m_regions.id
        WHERE m_order.generate_id = :selectedOrder"
    );
    $fetchDetailsSql->bindValue(":selectedOrder", $selectedOrder);
    $fetchDetailsSql->execute();
    $details = $fetchDetailsSql->fetch(PDO::FETCH_ASSOC);
    echo json_encode($details);
}
