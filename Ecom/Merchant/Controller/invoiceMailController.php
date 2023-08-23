<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "../Model/model.php";
// include "../Controller/common/mailSender.php";
if (isset($_POST['invoice']) && isset($_POST['delivery'])) {
    $id = $_GET['id'];
    echo $id;
    $selectedOrder = $_SESSION["selectedOrder"];
    // Update the delivery status
    $setDeliverySql = $pdo->prepare(
        "UPDATE m_order_details
        JOIN m_order
        ON m_order.id = m_order_details.order_id
        SET delivery_status = 1
        WHERE m_order.generate_id = :id"
    );
    
    $setDeliverySql->bindValue(":id", $selectedOrder);
    $setDeliverySql->execute();

    $sql = $pdo->prepare(
        "SELECT m_order.order_date,m_order.total_amt,m_order.payment_id,m_customer.phone,m_customer.street,m_customer.email as userEmail,
        m_townships.t_name,m_product.name,m_regions.r_name,m_merchant.logo,m_customer.username,m_product.sellprice,
        m_delivery.delivery_fees,m_merchant.store_name,m_merchant.email,m_merchant.phone,m_merchant.address,m_merchant.logo,m_merchant.phone
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
    $sql->bindValue(":id", $id);
    
    // if($sql->execute()){
    //     echo "sucess";
    // }else{
    //     echo "fail";
    // }
    // $customerInfo = $sql->fetchAll(PDO::FETCH_DEFAULT);
    // $_SESSION['customerInfo'] = $customerInfo;
    // $userEmail = $customerInfo[0]['userEmail'];
    // echo $userEmail;
    // echo "<pre>";
    // print_r($customerInfo);
    // echo "</pre>";



 

//     
    // $mail = new SendMail();
    // $mail -> sendMail(
    //     $userEmail,
    //     "View Detail Your Invoice",
    //     "
    //     <h2>Thank you for shopping with us</h2>
    //     <a href='http://localhost/Beyond%20Pj/Ecom/Merchant/View/invoice_mail.php'>View Detail Your Invoice</a>
    //     "
    // );
 

    // header("Location: ../View/order_manage.php");
}
?>