<?php
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $sql2 = "SELECT * FROM m_messages WHERE (incoming_msg_id = :row_unique_id
            OR outgoing_msg_id = :row_unique_id) AND (outgoing_msg_id = :outgoing_id 
            OR incoming_msg_id = :outgoing_id) ORDER BY msg_id DESC LIMIT 1";
    $query2 = $pdo->prepare($sql2);
    $query2->bindParam(':row_unique_id', $row['unique_id'], PDO::PARAM_INT);
    $query2->bindParam(':outgoing_id', $outgoing_id, PDO::PARAM_INT);
    $query2->execute();
    $row2 = $query2->fetch(PDO::FETCH_ASSOC);

    if ($query2->rowCount() > 0) {
        $result = $row2['msg'];
    } else {
        $result = "No message available";
    }

    $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;
    $you = (!empty($row2) && $row2['outgoing_msg_id'] == $outgoing_id) ? "You: " : "";

    // Correct the column name if needed
    $offline = ($row['is_logged_out'] == 1) ? "offline" : "";

    $hid_me = ($outgoing_id == $row['unique_id']) ? "hide" : "";

    $output .= '<a href="chat.php?id=' . $row['unique_id'] . '">
                <div class="content">
                <img src="php/images/' . $row['logo'] . '" alt="">
                <div class="details">
                    <span>' . $row['m_name'] . '</span>
                    <p>' . $you . $msg . '</p>
                </div>
                </div>
                <div class="status-dot ' . $offline . '"><i class="fas fa-circle"></i></div>
            </a>';
}
