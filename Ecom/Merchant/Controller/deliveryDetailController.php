<?php 

include "../Model/model.php";

$selectedDelivery = $_SESSION["selectedOrder"];

$sql = $pdo->prepare(
    "SELECT * 
    FROM m_order
    JOIN m_customer 
    ON m_customer.id = m_order.customer_id
    WHERE m_order.generate_id = :id"
);
$sql->bindValue(":id",$selectedDelivery);

$sql->execute();

$deliveryDetail = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($deliveryDetail);
echo "<pre>";
?>