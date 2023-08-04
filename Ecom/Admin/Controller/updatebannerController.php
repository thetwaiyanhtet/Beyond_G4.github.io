<?php

include "../Model/model.php";

$bannerone = $_FILES["photo1"]["name"];
$banneronetmp = $_FILES["photo1"]["tmp_name"];
$bannertwo = $_FILES["photo2"]["name"];
$bannertwotmp = $_FILES["photo2"]["tmp_name"];
$bannerthree = $_FILES["photo3"]["name"];
$bannerthreetmp = $_FILES["photo3"]["tmp_name"];
$bannerfour = $_FILES["photo4"]["name"];
$bannerfourtmp = $_FILES["photo4"]["tmp_name"];

if (move_uploaded_file($banneronetmp,"../../Storage/profile/".$bannerone) &&
move_uploaded_file($bannertwotmp,"../../Storage/profile/".$bannertwo) && 
move_uploaded_file($bannerthreetmp,"../../Storage/profile/".$bannerthree) &&
move_uploaded_file($bannerfourtmp,"../../Storage/profile/".$bannerfour))  {
    
    $sql = $pdo->prepare(
        "UPDATE m_banner SET 
    `banner_one_img`= :banner_one,
    `banner_two_img`= :banner_two,
    `banner_three_img`= :banner_three,
    `banner_four_img`= :banner_four WHERE id = 1;

    "
    );

    $sql->bindValue(":banner_one", "../../Storage/profile/".$bannerone);
    $sql->bindValue(":banner_two","../../Storage/profile/".$bannertwo);
    $sql->bindValue(":banner_three","../../Storage/profile/".$bannerthree);
    $sql->bindValue(":banner_four", "../../Storage/profile/".$bannerfour);
    
    $sql->execute();

    header( "Location: ../View/updatebanner.php");
}
