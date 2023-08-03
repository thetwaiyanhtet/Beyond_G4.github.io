<?php
echo "<pre>";
print_r($_POST);

ini_set('display_errors', 1);
// //Direct Access
if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
} else {

    $question_one = $_POST["Q1"];
    $question_two = $_POST["Q2"];
    $question_three = $_POST["Q3"];
    $question_four = $_POST["Q4"];
    $question_five = $_POST["Q5"];
    $answer_one = $_POST["A1"];
    $answer_two = $_POST["A2"];
    $answer_three = $_POST["A3"];
    $answer_four = $_POST["A4"];
    $answer_five = $_POST["A5"];

 

    include "../Model/model.php";

    $sql = $pdo->prepare(
        "UPDATE m_faq SET 
    `question_one`= :question_one,
    `answer_one`= :answer_one,
    `question_two`= :question_two,
    `answer_two`= :answer_two,
    `question_three`= :question_three,
    `answer_three`= :answer_three,
    `question_four`= :question_four,
    `answer_four`= :answer_four,
    `question_fivre`= :question_five,
    `answer_five`= :answer_five

    "
    );

    $sql->bindValue(":question_one", $question_one);
    $sql->bindValue(":answer_one", $answer_one);
    $sql->bindValue(":question_two", $question_two);
    $sql->bindValue(":answer_two", $answer_two);
    $sql->bindValue(":question_three", $question_three);
    $sql->bindValue(":answer_three", $answer_three);
    $sql->bindValue(":question_four", $question_four);
    $sql->bindValue(":answer_four", $answer_four);
    $sql->bindValue(":question_five", $question_five);
    $sql->bindValue(":answer_five", $answer_five);
    
    $sql->execute();




    header("Location: ../View/FAQ_edit.php");
}
