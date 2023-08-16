<?php 
include "./Model.php";

$sql = $pdo->prepare(
    "SELECT * FROM order ORDER BY id asc"
);
            
            $sql->execute();
            $results = $sql->fetch(PDO::FETCH_ASSOC);
            $user_arr = array();
