<?php 
// session_start();
 //DB connection
 include "../Model/model.php";
    $userEmail=$_SESSION["user_ID"];

    $sql = $pdo->prepare(
        "SELECT m_customer.username,m_regions.r_name,m_townships.t_name,m_customer.birthday,m_customer.email,m_customer.phone,m_customer.gender,m_customer.p_picture
          FROM m_customer
        JOIN m_townships
        On m_customer.township_id=m_townships.id
        JOIN m_regions
        On m_customer.region_id=m_regions.id
         WHERE email=:email"
    );
    $sql->bindValue(":email", $userEmail);
    // echo($userEmail);
    $sql->execute();
    $_SESSION["user_data"] = $sql->fetch(PDO::FETCH_ASSOC);
    // $user_id = $user_data['id'];
    // echo ($_SESSION["user_data"]);


    

    // header("Location: ../View/userProfileEditUpd.php");
