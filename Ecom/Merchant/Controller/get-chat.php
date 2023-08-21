<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "../Model/model.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = $_POST['incoming_id'];
    $output = "";

    $sql = "SELECT * FROM m_messages LEFT JOIN m_merchant ON m_merchant.unique_id = m_messages.outgoing_msg_id
            WHERE (outgoing_msg_id = :outgoing_id AND incoming_msg_id = :incoming_id)
            OR (outgoing_msg_id = :incoming_id AND incoming_msg_id = :outgoing_id) ORDER BY msg_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':outgoing_id', $outgoing_id, PDO::PARAM_INT);
    $query->bindParam(':incoming_id', $incoming_id, PDO::PARAM_INT);
    $query->execute();

    if($query->rowCount() > 0){
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            if($row['outgoing_msg_id'] === $outgoing_id){
                $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>'. $row['msg'] .'</p>
                            </div>
                            </div>';
            } else {
                $output .= '<div class="chat incoming">
                            <img src="php/images/'.$row['logo'].'" alt="">
                            <div class="details">
                                <p>'. $row['msg'] .'</p>
                            </div>
                            </div>';
            }
        }
    } else {
        $output .= '<div class="text">No messages are available. Once you send a message, they will appear here.</div>';
    }
    echo $output;
} else {
    header("location: ../View/login.php");
}
