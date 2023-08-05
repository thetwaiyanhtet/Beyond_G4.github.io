<?php
// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT m_customer.id,m_customer.username,m_customer.email,m_customer.phone,m_townships.name 
    FROM m_customer JOIN m_townships ON m_customer.township_id = m_townships.id ;"
);

$sql->execute(); // real sql run 

$customers  = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
