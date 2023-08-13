<?php
session_start();
ini_set('display_errors', 1);
if (isset($_POST["send"])) {
    $shopName = $_POST['shopName'];
    $slogan = trim($_POST['slogan']);
    $phNo = $_POST['phNo'];
    $address = $_POST['address'];
    $merchantEmail = $_SESSION["merchant_ID"];
    $img = $_FILES['photo5']['name'];
    $imgTmp = $_FILES['photo5']['tmp_name'];
    $img2 = $_FILES['photo6']['name'];
    $imgTmp2 = $_FILES['photo6']['tmp_name'];
    $pattern = '/^\d{10}$/';

    include "../Model/model.php";
    if (preg_match($pattern, $phNo)) {
        move_uploaded_file($imgTmp, "../../Storage/profile/" . $img);
        move_uploaded_file($imgTmp2, "../../Storage/profile/" . $img2);
        
        // Assuming $pdo is properly initialized
        
        $sql = $pdo->prepare("UPDATE m_merchant SET store_name=:shopName, slogan=:slogan, phone=:phone, address=:address, logo=:img, banner=:img2 WHERE email=:merchantEmail");
        $sql->bindValue(":merchantEmail", $merchantEmail);
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":slogan", $slogan);
        $sql->bindValue(":phone", $phNo);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":img", "/Storage/profile/" . $img);
        $sql->bindValue(":img2", "/Storage/profile/" . $img2);
    
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
