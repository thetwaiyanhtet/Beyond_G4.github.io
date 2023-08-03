<?php 
session_start();

 //DB connection
 include "../Model/model.php";

$name = $_POST["pname"];
$pid = $_POST["pid"];
$category = $_POST["category"];
$buyprice = $_POST["buyprice"];
$sellprice = $_POST["sellprice"];
$quantity = $_POST["quantity"];
$description = $_POST["description"];
$color1 = $_POST["color1"];
$color2 = $_POST["color2"];
$color3 = $_POST["color3"];
$photo1 = $_POST["photo1"];
$photo2 = $_POST["photo2"];
$photo3 = $_POST["photo3"];
$photo4 = $_POST["photo4"];

$sqlTwonships = $pdo->prepare(
    "INSERT INTO m_customer ;"
);

$sqlRegions = $pdo->prepare(
    "SELECT * FROM m_regions;"
);

$sqlTwonships->execute();
$sqlRegions->execute();

$_SESSION["townships"]  = $sqlTwonships->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["regions"]  = $sqlRegions->fetchAll(PDO::FETCH_ASSOC);
