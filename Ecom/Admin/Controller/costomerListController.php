<?php
// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_customer.id,m_customer.username,m_customer.email,m_customer.phone,m_townships.t_name ,m_regions.r_name,m_customer.street
    FROM m_customer 
    JOIN m_townships 
    ON m_customer.township_id = m_townships.id
    JOIN m_regions
    ON m_customer.region_id = m_regions.id ;"
);

$sql->execute(); // real sql run 

$customers  = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
