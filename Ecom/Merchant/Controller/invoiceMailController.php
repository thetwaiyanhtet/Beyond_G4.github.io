<?php
session_start();
 include "../Model/model.php";
 if (isset($_POST['invoice'])) {
    $id = $_GET['id'];
    $sql = $pdo->prepare(
        "SELECT m_order.order_date,m_order.total_amt,m_order.payment_id,m_customer.phone,m_customer.street,m_customer.email,
        m_townships.t_name,m_product.name,m_regions.r_name,m_merchant.logo,m_customer.username,m_product.sellprice,
        m_delivery.delivery_fees,m_merchant.store_name,m_merchant.email,m_merchant.phone,m_merchant.address
        FROM m_order
        JOIN m_customer
        ON m_order.customer_id = m_customer.id
        JOIN m_order_details 
        ON m_order_details.order_id = m_order.id
        JOIN m_townships
        ON m_townships.id = m_customer.township_id
        LEFT JOIN m_regions 
        ON m_regions.id = m_customer.region_id
        LEFT JOIN m_delivery
        ON m_delivery.region_id = m_regions.id
        JOIN m_product
        ON m_product.id = m_order_details.product_id
        JOIN m_merchant
        ON m_merchant.id = m_order_details.merchant_id
        WHERE m_order.id =:id"
    );
    $sql->bindValue(":id",$id);
    $sql->execute();
    $customerInfo = $sql->fetchAll();
    $_SESSION["customerInfo"] = $customerInfo;
    echo "<pre>";
    print_r($customerInfo);
    // echo $customerInfo['username'].'<br>';
    // echo $customerInfo['name'].'<br>';
    // echo $customerInfo['total_amt'] .'<br>';
    // echo $customerInfo['sellprice'].'<br>';
    // echo $customerInfo['delivery_fees'].'<br>';
    // echo $customerInfo['store_name'].'<br>';
    // echo $customerInfo['order_date'].'<br>';
    // echo $customerInfo['email'].'<br>';
    // echo $customerInfo['phone']. '<br>';
    // echo $customerInfo['address']. '<br>';
    // $payment_type = $customerInfo['payment_id'];
  
    if($payment_type == 0){
        echo "Visa".'<br>';
    }else{
        echo "KBZ".'<br>';
    }
    echo $customerInfo['r_name'].' , '.$customerInfo['t_name']. ' , '. $customerInfo['street'];
   header("Location: ../View/invoice_mail.php");
}

?>