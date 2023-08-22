<?php
ini_set('display_errors', 1);
include "../Model/model.php";


$sql = $pdo -> prepare(
    "SELECT m_order.generate_id, m_order.id, m_product.name,m_merchant.store_name,m_customer.username,m_customer.street,m_regions.r_name,m_townships.t_name,
    m_order.total_amt,m_order.order_date
    From m_order 
    JOIN m_order_details
    ON  m_order.id = m_order_details.order_id
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
    WHERE m_order.id
    GROUP BY m_order.id"
);
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_ASSOC);

// Pagination Parameters
$itemsPerPage = 7; // Number of items to display per page
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page number
$startIndex = ($currentPage - 1) * $itemsPerPage; // Calculate the starting index of items for the current page

// Paginate the data
$paginatedData = array_slice($results, $startIndex, $itemsPerPage);



 //SELECT MERCHANT DATA;
// $merchantID = $results['merchant_id'];

// $merchantSQl = $pdo->prepare("SELECT * FROM m_merchant WHERE id=:id");
// $merchantSQl ->bindValue(":id", $merchantID);
// $merchantSQl->execute();
// $merchantInfo = $merchantSQl->fetch();

// $customerID = $results['customer_id'];

// $customerSQl = $pdo->prepare("SELECT * FROM m_customer WHERE id=:id");
// $customerSQl ->bindValue(":id", $customerID);
// $customerSQl->execute();
// $customerInfo = $customerSQl->fetch();

// $customerAddress = $pdo->prepare("SELECT street,township_id,region_id From m_customer WHERE id=:id");
// $customerAddress ->bindValue(':id',$customerID);
// $customerAddress->execute();
// $customerDetailAdd = $customerAddress->fetch();
// $customerStreetName = $customerDetailAdd['street'];//get street name
// $customerTown = $customerDetailAdd['township_id'];
// $customerRegion = $customerDetailAdd['region_id'];

// $getTownship = $pdo->prepare("SELECT t_name From m_townships WHERE id=:id");
// $getTownship->bindValue(":id",$customerTown);
// $getTownship->execute();
// $Township = $getTownship->fetch(); //get Township name

// $getRegion = $pdo->prepare("SELECT r_name From m_regions WHERE id=:id");
// $getRegion->bindValue(":id",$customerRegion);
// $getRegion->execute();
// $Region = $getRegion->fetch(); //get Township name


?>