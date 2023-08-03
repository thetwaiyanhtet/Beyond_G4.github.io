<?php 
session_start();

 //DB connection
 include "../Model/model.php";

$sqlTwonships = $pdo->prepare(
    "SELECT * FROM m_townships;"
);

$sqlRegions = $pdo->prepare(
    "SELECT * FROM m_regions;"
);

$sqlTwonships->execute();
$sqlRegions->execute();

$_SESSION["townships"]  = $sqlTwonships->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["regions"]  = $sqlRegions->fetchAll(PDO::FETCH_ASSOC);
// print_r($_SESSION["townships"]);
// print_r($_SESSION["regions"]);
     ?>