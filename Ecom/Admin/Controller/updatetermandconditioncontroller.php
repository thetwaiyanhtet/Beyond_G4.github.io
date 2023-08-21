<?php


ini_set('display_errors', 1);
// //Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {

    $tc_onea = $_POST["onea"];
    $tc_oneb = $_POST["oneb"];
    $tc_twoa = $_POST["twoa"];
    $tc_twob = $_POST["twob"];
    $tc_threea = $_POST["threea"];
    $tc_threeb = $_POST["threeb"];
    $tc_four = $_POST["four"];
    $tc_five = $_POST["five"];
    $tc_six = $_POST["six"];
    $tc_seven = $_POST["seven"];
    $tc_eight = $_POST["eight"];
    $tc_nine = $_POST["nine"];
    $tc_ten = $_POST["ten"];



    include "../Model/model.php";

    $sql = $pdo->prepare(
        "UPDATE m_term_condition SET 
    `onea`= :tc_onea,
    `oneb`= :tc_oneb,
    `twoa`= :tc_twoa,
    `twob`= :tc_twob,
    `threea`= :tc_threea,
    `threeb`= :tc_threeb,
    `four`= :tc_four,
    `five`= :tc_five,
    `six`= :tc_six,
    `seven`= :tc_seven,
    `eight`= :tc_eight,
    `nine`= :tc_nine,
    `ten`= :tc_ten
    "
    );

    $sql->bindValue(":tc_onea", $tc_onea);
    $sql->bindValue(":tc_oneb", $tc_oneb);
    $sql->bindValue(":tc_twoa", $tc_twoa);
    $sql->bindValue(":tc_twob", $tc_twob);
    $sql->bindValue(":tc_threea", $tc_threea);
    $sql->bindValue(":tc_threeb", $tc_threeb);
    $sql->bindValue(":tc_four", $tc_four);
    $sql->bindValue(":tc_five", $tc_five);
    $sql->bindValue(":tc_six", $tc_six);
    $sql->bindValue(":tc_seven", $tc_seven);
    $sql->bindValue(":tc_eight", $tc_eight);  
    $sql->bindValue(":tc_nine", $tc_nine);  
    $sql->bindValue(":tc_ten", $tc_ten);
    $sql->execute();




 header("Location: ../View/terms&cond.php");
}
