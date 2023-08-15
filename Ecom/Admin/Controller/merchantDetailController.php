<?php 
session_start();

// DB Connection
include "../Model/model.php";
$merchantId = $_GET['id'];
// echo($merchantId); 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $merchantId = $_GET['id'];

    $sql=$pdo->prepare(
        "SELECT m_merchant.store_name,m_merchant.address,m_merchant.plan_start_date,m_merchant.plan_end_date,m_plan.plan_name
        FROM m_merchant
        JOIN m_plan
        ON m_merchant.plan_id=m_plan.id
        WHERE m_merchant.id=:id;
        "
    );

    $orderCountSql=$pdo->prepare(
        "SELECT COUNT(generate_id) AS order_count
        FROM m_order
        JOIN m_order_details
        ON m_order_details.order_id = m_order.id
        JOIN m_merchant
        ON m_order_details.merchant_id=m_merchant.id
        WHERE m_merchant.id=:id
        GROUP BY m_order.generate_id;
        "
    );

    $instockSumSql=$pdo->prepare(
        "SELECT SUM(instock) AS total_product_sum
        FROM m_product
        JOIN m_merchant
        ON m_product.merchant_id=m_merchant.id
        WHERE m_merchant.id=:id;
        "
    );

    $productCountSql=$pdo->prepare(
        "SELECT COUNT(code) AS product_count
        FROM m_product
        JOIN m_merchant
        ON m_product.merchant_id=m_merchant.id
        WHERE m_merchant.id=:id;
        "
    );

    $productListSql=$pdo->prepare(
        "SELECT m_product.name,m_product.p_one,m_product.sellprice,m_product.code
        FROM m_product
        JOIN m_merchant
        ON m_product.merchant_id=m_merchant.id
        WHERE m_merchant.id=:id;
        "
    );

    $sql->bindValue(":id",$merchantId);
    $orderCountSql->bindValue(":id",$merchantId);
    $instockSumSql->bindValue(":id",$merchantId);
    $productCountSql->bindValue(":id",$merchantId);
    $productListSql->bindValue(":id",$merchantId);


    $sql->execute();
    $orderCountSql->execute();
    $instockSumSql->execute();
    $productCountSql->execute();
    $productListSql->execute();


    $merchantDetail = $sql->fetch(PDO::FETCH_ASSOC);
    $orderCount=$orderCountSql->fetch(PDO::FETCH_ASSOC);
    $productSum=$instockSumSql->fetch(PDO::FETCH_ASSOC);
    $productCount=$productCountSql->fetch(PDO::FETCH_ASSOC);
    $productList=$productListSql->fetchAll(PDO::FETCH_ASSOC);

} else {

    echo "Invalid customer ID!";
}



?>