<?php
 include "../Controller/common/emailFormatCheck.php";

session_start();
ini_set('display_errors', 1);
if (isset($_POST["register"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //DB connection
    include "../Model/model.php";

    //check duplicate email

    $sql = $pdo->prepare(
        "SELECT * FROM m_merchant WHERE email=:email"
    );
    $sql->bindValue(":email", $email);
    $sql->execute();

    $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!isValidEmail($email)) {
        $_SESSION["registerError"] = "Invalid email format. Please enter a valid email address.";
        header("Location: ../View/signUp.php");
    } elseif (count($resultEmail) !== 0) {
        $_SESSION["registerError"] = "Email is already registered. Please use a different email.";
        header("Location: ../View/signUp.php");
    } elseif (strlen($password) < 8) { // Corrected password length check
        $_SESSION["registerError2"] = "Password must be at least 8 characters long.";
        header("Location: ../View/signUp.php");
    } else {
        $_SESSION['merchant_ID'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['merchantName'] = $username;
        header("Location: ../View/ChoosePlan.php");
    }

} else {
    header("Location: ../View/404page.php");
}

