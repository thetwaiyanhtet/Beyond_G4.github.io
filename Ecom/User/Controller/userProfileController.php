<?php
include "../Model/model.php";
$userEmail = $_SESSION["user_ID"];

$VerifySql = $pdo->prepare(
  "SELECT verify
  FROM m_customer
  WHERE email=:email"
);
$VerifySql->bindValue(":email", $userEmail);
$VerifySql->execute();
$verify_data = $VerifySql->fetch(PDO::FETCH_ASSOC);
$_SESSION["verifyData"] = $verify_data;


if ($verify_data["verify"] == 0) {

  $sql = $pdo->prepare(
    "SELECT username,email,unique_id,del_flg
    FROM m_customer
    WHERE email=:email"
  );
  $sql->bindValue(":email", $userEmail);
  $sql->execute();
  $_SESSION["user_data"] = $sql->fetch(PDO::FETCH_ASSOC);

} else if ($verify_data["verify"] == 1) {
  $sql = $pdo->prepare(
    "SELECT m_customer.username,m_regions.r_name,m_regions.id,m_townships.t_name,m_townships.id,m_customer.birthday,m_customer.email,
    m_customer.street,m_customer.phone,m_customer.gender,m_customer.p_picture
          FROM m_customer
          JOIN m_townships
          On m_customer.township_id=m_townships.id
          JOIN m_regions
          On m_customer.region_id=m_regions.id
          WHERE email=:email"
  );
  $sql->bindValue(":email", $userEmail);
  $sql->execute();
  $_SESSION["user_data"] = $sql->fetch(PDO::FETCH_ASSOC);
}

