<?php

    include "../Model/model.php";
    $sql=$pdo->prepare(
        "SELECT * FROM m_admin_category"
        );
        
        $sql->execute();

        $categories= $sql->fetchAll(PDO::FETCH_ASSOC);
        

        

