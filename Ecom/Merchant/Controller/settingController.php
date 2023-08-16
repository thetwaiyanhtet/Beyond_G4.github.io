<?php
session_start();
ini_set('display_errors', 1);
if (isset($_POST["send"])) {
    $shopName = $_POST['shopName'];
    $slogan = trim($_POST['slogan']);
    $phNo = $_POST['phNo'];
    $address = $_POST['address'];
    $merchantEmail = $_SESSION["merchant_ID"];
    // $img = $_FILES['photo5']['name'];
    // $imgTmp = $_FILES['photo5']['tmp_name'];
    if (isset($_FILES['photo5']['name']) && !empty($_FILES['photo5']['name'])) {
        $img = $_FILES['photo5']['name'];
        $imgTmp = $_FILES['photo5']['tmp_name'];
    } else {
        $img = $existingProfile; // Set photo to null if no file was uploaded
        $imgTmp = null;
    }
    move_uploaded_file($imgTmp, "../../Storage/profile/" . $img);

    // $img2 = $_FILES['photo6']['name'];
    // $imgTmp2 = $_FILES['photo6']['tmp_name'];
    if (isset($_FILES['photo6']['name']) && !empty($_FILES['photo6']['name'])) {
        $img2 = $_FILES['photo6']['name'];
        $imgTmp2 = $_FILES['photo6']['tmp_name'];
    } else {
        $img2 = $existingBanner; // Set photo to null if no file was uploaded
        $imgTmp2 = null;
    }
    move_uploaded_file($imgTmp2, "../../Storage/profile/" . $img2);
    $pattern = '/^\d{11}$/';

    include "../Model/model.php";

    $existingProfile = null;
    $existingBanner = null;

    if (isset($_POST["merchant_ID"]) && !empty($_POST["merchant_ID"])) {
        $merchantId = $_POST["merchant_ID"];

        // Query to retrieve existing image paths for the product
        $existingQuery = $pdo->prepare("SELECT logo,banner FROM m_merchant WHERE id = :id");
        $existingQuery->bindValue(":id", $merchantId);
        $existingQuery->execute();

        $existingData = $existingQuery->fetch(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($existingData);
        // echo "</pre>";

        if ($existingData) {
            $existingProfile = $existingData["logo"];
            $existingBanner = $existingData["banner"];
        }
    }




    if (preg_match($pattern, $phNo)) {

        $sql = $pdo->prepare("UPDATE m_merchant SET store_name=:shopName, slogan=:slogan, phone=:phone, address=:address, logo=:img, banner=:img2,verify = 1 WHERE email=:merchantEmail");
        $sql->bindValue(":merchantEmail", $merchantEmail);
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":slogan", $slogan);
        $sql->bindValue(":phone", $phNo);
        $sql->bindValue(":address", $address);
        // $sql->bindValue(":img", "/Storage/profile/" . $img);
        // $sql->bindValue(":img",  $img !== null ? "/Storage/profile/" .  $img : null);
        // // $sql->bindValue(":img2", "/Storage/profile/" . $img2);
        // $sql->bindValue(":img2",  $img2 !== null ? "/Storage/profile/" .  $img2 : null);

        $sql->bindValue(":img", $img !== null ? $img : $existingProfile);
        $sql->bindValue(":img2", $$img2 !== null ? $img2 : $existingBanner);
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
