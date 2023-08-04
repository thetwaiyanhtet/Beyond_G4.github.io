<?php 
session_start();
include "../Model/model.php";

$userEmail = $_SESSION["user_ID"];
$name = $_POST["name"];
$phone_no = $_POST["phone_no"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$street = $_POST["street"];

$sql = $pdo->prepare(
    "UPDATE m_customer
    SET 
    name = :name,
    phone = :phone_no,
    birthday = :dob,
    gender = :gender,
    str = :street,
    update_date = :updateDate WHERE email=:email;"
);

$sql->bindValue(":name",$name);
$sql->bindValue(":phone_no", $phone_no);
$sql->bindValue(":dob", $dob);
$sql->bindValue(":gender", $gender);
$sql->bindValue(":street", $street);
$sql->bindValue(":updateDate", date("Y-m-d"));
$sql->bindValue(":email", $userEmail);

$sql->execute();

$userData = $sql->fetchAll(PDO::FETCH_ASSOC);

header("Location: ../View/profileMenu.php");
?>