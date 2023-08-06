<?php
// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * 
    FROM m_customer 
    JOIN m_order 
    ON m_customer.id = m_order.customer_id;"
);

$sql->execute(); // real sql run 


$orders = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($orders);
// echo "</pre>";


