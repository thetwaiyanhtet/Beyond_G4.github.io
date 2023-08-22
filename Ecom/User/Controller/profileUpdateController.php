<?php 
session_start();
include "../Model/model.php";

$userEmail = $_SESSION["user_ID"];
$name = $_POST["name"];
$phone_no = $_POST["phone_no"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$street = $_POST["street"];
$region =$_POST["region"];
$township =$_POST["township"];

// $photo=$_FILES["photo"]["name"];
// $phototmp=$_FILES["photo"]["tmp_name"];

$existingPhoto=null;

$existingUserQuery=$pdo->prepare("SELECT p_picture FROM m_customer WHERE email=:mail");
$existingUserQuery->bindValue(":mail",$userEmail);
$existingUserQuery->execute();

$existingUserData=$existingUserQuery->fetch(PDO::FETCH_ASSOC);

if($existingUserData){
    $existingPhoto=$existingUserData["p_picture"];
}

if (isset($_FILES["photo"]["name"]) && !empty($_FILES["photo"]["name"])) {
    $photo = $_FILES["photo"]["name"];
    $phototmp = $_FILES["photo"]["tmp_name"];
} else {
    $photo = $existingPhoto; 
    $phototmp = null;
}

     move_uploaded_file($phototmp,"../../Storage/profile/".$photo);


    $sql = $pdo->prepare(
        "UPDATE m_customer
        SET 
        username = :name,
        p_picture=:photo,
        phone = :phone_no,
        birthday = :dob,
        gender = :gender,
        street = :street,
        region_id=:region,
        verify=1,
        township_id=:township,
        update_date = :updateDate 
        
        WHERE email=:email;"
    );
    
    $sql->bindValue(":name",$name);
    $sql->bindValue(":photo", $photo != null ? $photo : $existingPhoto);
    $sql->bindValue(":phone_no", $phone_no);
    $sql->bindValue(":dob", $dob);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":street", $street);
    $sql->bindValue(":region", $region);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":updateDate", date("Y-m-d"));
    $sql->bindValue(":email", $userEmail);
    
    $sql->execute();
    
    // $userDetailData = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($userDetailData);
    
    header("Location: ../View/profileMenu.php");



