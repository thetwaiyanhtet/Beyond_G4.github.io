<?php 
session_start();
include "../Model/model.php";

$userEmail = $_SESSION["user_ID"];
$name = $_POST["name"];
$photo=$_FILES["photo"]["name"];
$phototmp=$_FILES["photo"]["tmp_name"];
$phone_no = $_POST["phone_no"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$street = $_POST["street"];
$region =$_POST["region"];
$township =$_POST["township"];

if(move_uploaded_file($phototmp,"../../Storage/profile/".$photo)){
    $sql = $pdo->prepare(
        "UPDATE m_customer
        SET 
        name = :name,
        p_picture=:photo,
        phone = :phone_no,
        birthday = :dob,
        gender = :gender,
        str = :street,
        region_id=:region,
        township_id=:township,
        update_date = :updateDate 
        
        WHERE email=:email;"
    );
    
    $sql->bindValue(":name",$name);
    $sql->bindValue(":photo","/Storage/profile/".$photo);
    $sql->bindValue(":phone_no", $phone_no);
    $sql->bindValue(":dob", $dob);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":street", $street);
    $sql->bindValue(":region", $region);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":updateDate", date("Y-m-d"));
    $sql->bindValue(":email", $userEmail);
    
    $sql->execute();
    
    // $userData = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($userData);
    
    header("Location: ../View/profileMenuShow.php");
}else{
    header("Location: ../View/errors/error.php");
}



