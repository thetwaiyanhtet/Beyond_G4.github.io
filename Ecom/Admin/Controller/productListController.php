<?php

// DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_product;"
);

$sql->execute(); // real sql run 

$products = $sql->fetchAll(PDO::FETCH_ASSOC);
// DB Connection
