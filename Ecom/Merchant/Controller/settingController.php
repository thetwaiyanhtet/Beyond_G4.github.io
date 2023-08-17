<?php
session_start();
ini_set('display_errors', 1);
if (isset($_POST["send"])) {
    $shopName = $_POST['shopName'];
    $slogan = trim($_POST['slogan']);
    $phNo = $_POST['phNo'];
    $address = $_POST['address'];
    $merchantEmail = $_SESSION["merchant_ID"];

    include "../Model/model.php";

    $existingProfile = null;
    $existingBanner = null;

    // Query to retrieve existing image paths for the product
    $existingQuery = $pdo->prepare("SELECT logo,banner FROM m_merchant WHERE email = :email");
    $existingQuery->bindValue(":email", $merchantEmail);
    $existingQuery->execute();

    $existingData = $existingQuery->fetch(PDO::FETCH_ASSOC);


    if ($existingData) {
        $existingProfile = $existingData["logo"];
        $existingBanner = $existingData["banner"];
    }


    if (isset($_FILES['photo5']['name']) && !empty($_FILES['photo5']['name'])) {
        $img = $_FILES['photo5']['name'];
        $imgTmp = $_FILES['photo5']['tmp_name'];
    } else {
        $img = $existingProfile; // Set photo to null if no file was uploaded
        $imgTmp = null;
    }

    if (isset($_FILES['photo6']['name']) && !empty($_FILES['photo6']['name'])) {
        $img2 = $_FILES['photo6']['name'];
        $imgTmp2 = $_FILES['photo6']['tmp_name'];
    } else {
        $img2 = $existingBanner; // Set photo to null if no file was uploaded
        $imgTmp2 = null;
    }

    move_uploaded_file($imgTmp, "../../Storage/profile/" . $img);
    move_uploaded_file($imgTmp2, "../../Storage/profile/" . $img2);

    $pattern = '/^\d{11}$/';

    if (preg_match($pattern, $phNo)) {

        $sql = $pdo->prepare("UPDATE m_merchant SET store_name=:shopName, slogan=:slogan, phone=:phone, address=:address, logo=:img, banner=:img2,verify = 1 WHERE email=:merchantEmail");
        $sql->bindValue(":merchantEmail", $merchantEmail);
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":slogan", $slogan);
        $sql->bindValue(":phone", $phNo);
        $sql->bindValue(":address", $address);

        $sql->bindValue(":img", $img !== null ? $img : $existingProfile);
        $sql->bindValue(":img2", $img2 !== null ? $img2 : $existingBanner);
        if ($sql->execute()) {

            header("Location: ../View/Setting.php");
            exit();
        } else {
            $_SESSION['error'] = "Failed to update merchant information.";
            header("Location: ../View/Setting.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid Phone format";
        header("Location: ../View/Setting.php");
        exit();
    }
} else {
    header("Location: ../View/Setting.php");
    exit();
}
