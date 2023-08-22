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

if (move_uploaded_file($banneronetmp,"../../Storage/banner/".$bannerone) &&
move_uploaded_file($bannertwotmp,"../../Storage/banner/".$bannertwo) && 
move_uploaded_file($bannerthreetmp,"../../Storage/banner/".$bannerthree) &&
move_uploaded_file($bannerfourtmp,"../../Storage/banner/".$bannerfour) && 
move_uploaded_file($bannerfivetmp,"../../Storage/banner/".$bannerfive) &&
move_uploaded_file($bannersixtmp,"../../Storage/banner/".$bannersix) &&
move_uploaded_file($bannerseventmp,"../../Storage/banner/".$bannerseven) &&
move_uploaded_file($bannereighttmp,"../../Storage/banner/".$bannereight) &&
move_uploaded_file($bannerninetmp,"../../Storage/banner/".$bannernine) &&
move_uploaded_file($bannertentmp,"../../Storage/banner/".$bannerten) &&
move_uploaded_file($bannereleventmp,"../../Storage/banner/".$bannereleven) &&
move_uploaded_file($bannertwelvetmp,"../../Storage/banner/".$bannertwelve)

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

    $sql->bindValue(":banner_one", "../../Storage/banner/".$bannerone);
    $sql->bindValue(":banner_two","../../Storage/banner/".$bannertwo);
    $sql->bindValue(":banner_three","../../Storage/banner/".$bannerthree);
    $sql->bindValue(":banner_four", "../../Storage/banner/".$bannerfour);
    $sql->bindValue(":banner_five", "../../Storage/banner/".$bannerfive);
    $sql->bindValue(":banner_six", "../../Storage/banner/".$bannersix);
    $sql->bindValue(":banner_seven", "../../Storage/banner/".$bannerseven);
    $sql->bindValue(":banner_eight", "../../Storage/banner/".$bannereight);
    $sql->bindValue(":banner_nine", "../../Storage/banner/".$bannernine);
    $sql->bindValue(":banner_ten", "../../Storage/banner/".$bannerten);
    $sql->bindValue(":banner_eleven", "../../Storage/banner/".$bannereleven);
    $sql->bindValue(":banner_twelve", "../../Storage/banner/".$bannertwelve);
    
    $sql->execute();

    header( "Location: ../View/updatebanner.php");
}
