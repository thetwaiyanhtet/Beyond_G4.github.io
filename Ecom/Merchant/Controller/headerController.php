<?php
session_start();

//DB connection
include "../Model/model.php";

$merchantEmail = $_SESSION["merchant_ID"];

$VerifySql = $pdo->prepare(
    "SELECT verify
  FROM m_merchant
  WHERE email=:email"
);

$VerifySql->bindValue(":email", $merchantEmail);
$VerifySql->execute();
$verify_data = $VerifySql->fetch(PDO::FETCH_ASSOC);
$_SESSION["verifyData"] = $verify_data;


if ($verify_data["verify"] == 0) {
    $sql = $pdo->prepare(
        "SELECT m_name,email
        FROM m_merchant
        WHERE email=:email"
    );
    $sql->bindValue(":email", $merchantEmail);
    $sql->execute();
    $merchant_data= $sql->fetch(PDO::FETCH_ASSOC);

} else if ($verify_data["verify"] == 1) {
    $sql = $pdo->prepare(
        "SELECT m_merchant.m_name,m_merchant.email,m_merchant.phone,m_merchant.address,m_merchant.logo,m_merchant.verify,m_merchant.store_name
          FROM m_merchant
          WHERE email=:email"
    );
    $sql->bindValue(":email", $merchantEmail);
    $sql->execute();
    $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);
}
