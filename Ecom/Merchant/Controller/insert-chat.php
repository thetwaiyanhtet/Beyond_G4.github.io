<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "../Model/model.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = $_POST['incoming_id'];
    $message = $_POST['message'];

    if(!empty($message)){
        $sql = $pdo->prepare("INSERT INTO m_messages (incoming_msg_id, outgoing_msg_id, msg)
                              VALUES (:incoming_id, :outgoing_id, :message)");

        $sql->bindParam(':incoming_id', $incoming_id, PDO::PARAM_INT);
        $sql->bindParam(':outgoing_id', $outgoing_id, PDO::PARAM_INT);
        $sql->bindParam(':message', $message, PDO::PARAM_STR);

        $sql->execute();
    }
} else {
    header("location: ../View/login.php");
}
//customer insert