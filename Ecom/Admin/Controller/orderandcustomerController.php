<?php

//DB Connection
include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT order_date, COUNT(*) AS total_rows
    FROM m_order 
    GROUP BY order_date
    ORDER BY order_date;"
);

$sqlcc = $pdo->prepare(
    "SELECT create_date, COUNT(*) AS total_rows
    FROM m_customer 
    GROUP BY create_date
    ORDER BY create_date;
    "
);

$slqplan = $pdo->prepare(
    "SELECT  COUNT(m_merchant.id) AS total_merchants
    FROM m_plan
    LEFT JOIN m_merchant ON m_plan.id = m_merchant.plan_id
    GROUP BY m_plan.plan_name
    ORDER BY m_plan.id ASC;
    "
);

$lastmerchant = $pdo->prepare(
    "SELECT m_name,logo,create_date
    FROM m_merchant
    ORDER BY m_merchant.id DESC
    LIMIT 3;
    "
);

$lastcustomer = $pdo->prepare(
    "SELECT username,p_picture,create_date
    FROM m_customer
    ORDER BY m_customer.id DESC
    LIMIT 3;
    "
);

$category = $pdo->prepare(
    "SELECT c.c_name,od.quantity
    FROM m_order_details od
    JOIN m_product p ON od.product_id = p.id
    JOIN m_admin_category c ON p.category_id = c.id
    GROUP BY c.c_name
    ORDER BY od.quantity DESC
    LIMIT 2;
    "
);
$sql->execute(); //run real sql
$sqlcc->execute();
$slqplan->execute();
$lastmerchant->execute();
$category->execute();
$lastcustomer -> execute();

$_SESSION["m_order"]=$sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["m_customer"] = $sqlcc->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["m_plan"] = $slqplan->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["m_lastmerchant"] = $lastmerchant->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["m_category"] = $category->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["m_lastcustomer"] = $lastcustomer->fetchAll(PDO::FETCH_ASSOC);
