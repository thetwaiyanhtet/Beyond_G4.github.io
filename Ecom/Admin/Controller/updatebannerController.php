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

$bannerfive = $_FILES["photo5"]["name"];
$bannerfivetmp = $_FILES["photo5"]["tmp_name"];
$bannersix = $_FILES["photo6"]["name"];
$bannersixtmp = $_FILES["photo6"]["tmp_name"];
$bannerseven = $_FILES["photo7"]["name"];
$bannerseventmp = $_FILES["photo7"]["tmp_name"];
$bannereight = $_FILES["photo8"]["name"];
$bannereighttmp = $_FILES["photo8"]["tmp_name"];
$bannernine = $_FILES["photo9"]["name"];
$bannerninetmp = $_FILES["photo9"]["tmp_name"];
$bannerten = $_FILES["photo10"]["name"];
$bannertentmp = $_FILES["photo10"]["tmp_name"];
$bannereleven = $_FILES["photo11"]["name"];
$bannereleventmp = $_FILES["photo11"]["tmp_name"];
$bannertwelve = $_FILES["photo12"]["name"];
$bannertwelvetmp = $_FILES["photo12"]["tmp_name"];

if (move_uploaded_file($banneronetmp,"../../Storage/profile/".$bannerone) &&
move_uploaded_file($bannertwotmp,"../../Storage/profile/".$bannertwo) && 
move_uploaded_file($bannerthreetmp,"../../Storage/profile/".$bannerthree) &&
move_uploaded_file($bannerfourtmp,"../../Storage/profile/".$bannerfour) && 
move_uploaded_file($bannerfivetmp,"../../Storage/profile/".$bannerfive) &&
move_uploaded_file($bannersixtmp,"../../Storage/profile/".$bannersix) &&
move_uploaded_file($bannerseventmp,"../../Storage/profile/".$bannerseven) &&
move_uploaded_file($bannereighttmp,"../../Storage/profile/".$bannereight) &&
move_uploaded_file($bannerninetmp,"../../Storage/profile/".$bannernine) &&
move_uploaded_file($bannertentmp,"../../Storage/profile/".$bannerten) &&
move_uploaded_file($bannereleventmp,"../../Storage/profile/".$bannereleven) &&
move_uploaded_file($bannertwelvetmp,"../../Storage/profile/".$bannertwelve)

)  {
    
    $sql = $pdo->prepare(
        "UPDATE m_banner SET 
    `banner_one_img`= :banner_one,
    `banner_two_img`= :banner_two,
    `banner_three_img`= :banner_three,
    `banner_four_img`= :banner_four,
    `banner_five_img`= :banner_five,
    `banner_six_img`= :banner_six,
    `banner_seven_img`= :banner_seven,
    `banner_eight_img`= :banner_eight,
    `banner_nine_img`= :banner_nine,
    `banner_ten_img`= :banner_ten,
    `banner_eleven_img`= :banner_eleven,
    `banner_twelve_img`= :banner_twelve
     WHERE id = 1;

    "
    );

    $sql->bindValue(":banner_one", "../../Storage/profile/".$bannerone);
    $sql->bindValue(":banner_two","../../Storage/profile/".$bannertwo);
    $sql->bindValue(":banner_three","../../Storage/profile/".$bannerthree);
    $sql->bindValue(":banner_four", "../../Storage/profile/".$bannerfour);
    $sql->bindValue(":banner_five", "../../Storage/profile/".$bannerfive);
    $sql->bindValue(":banner_six", "../../Storage/profile/".$bannersix);
    $sql->bindValue(":banner_seven", "../../Storage/profile/".$bannerseven);
    $sql->bindValue(":banner_eight", "../../Storage/profile/".$bannereight);
    $sql->bindValue(":banner_nine", "../../Storage/profile/".$bannernine);
    $sql->bindValue(":banner_ten", "../../Storage/profile/".$bannerten);
    $sql->bindValue(":banner_eleven", "../../Storage/profile/".$bannereleven);
    $sql->bindValue(":banner_twelve", "../../Storage/profile/".$bannertwelve);
    
    $sql->execute();

    header( "Location: ../View/updatebanner.php");
}
