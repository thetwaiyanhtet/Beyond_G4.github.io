<?php
session_start();
include "../Model/model.php";
include "./common/mailSender.php";
$selectedOrder = $_SESSION["selectedOrder"];
$userEmail =$_SESSION['userEmail'];
$setDeliverySql = $pdo->prepare(
    "UPDATE m_order_details
    JOIN m_order
    ON m_order.id = m_order_details.order_id
    SET delivery_status = 1
    WHERE m_order.generate_id = :id"
);

$setDeliverySql->bindValue(":id", $selectedOrder);
$setDeliverySql->execute();
$mail = new SendMail();
$mail->sendMail(
    $userEmail,
    "View Detail Your Invoice",
    "
        <h2>Thank you for shopping with us</h2>
        <a href='http://localhost/Beyond%20Pj/Ecom/Merchant/View/invoice_mail.php'>View Detail Your Invoice</a>
        "
);
 


header('Location: ../View/order_manage.php');