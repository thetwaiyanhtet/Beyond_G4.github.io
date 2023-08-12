<?php
 include "../Model/model.php";
session_start();

if (isset($_POST["send"])) {
    $shopName = $_POST['shopName'];
    $slogan = trim($_POST['slogan']);
    $phNo = $_POST['phNo'];
    $address = $_POST['address'];
    $merchant_email = $_SESSION["merchant_ID"];
    $img = $_FILES['photo']['name'];
    $imgTmp = $_FILES['photo']['tmp_name'];
    $pattern = '/^\d{10}$/'; 

    try {
        $sql = $pdo->prepare("SELECT id FROM m_merchant WHERE email=:email");
        $sql->bindValue(":email", $merchant_email);
        $sql->execute();
        $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);
        $merchant_id = $merchant_data['id'];
        echo $merchant_id;

        if (preg_match($pattern, $phNo)) {
            move_uploaded_file($imgTmp,"../../Storage/profile/".$img);
            $sql = $pdo->prepare("UPDATE m_merchant SET store_name=:shopName,slogan=:slogan,phone=:phone,address=:address, logo=:img WHERE id=:merchant_id");
            $sql->bindValue(":merchant_id", $merchant_id);
            $sql->bindValue(":shopName", $shopName);
            $sql->bindValue(":slogan", $slogan);
            $sql->bindValue(":phone", $phNo);
            $sql->bindValue(":address", $address);
            $sql->bindValue(":img", "/Storage/profile/" . $img);
            $sql->execute();
    
            header("Location: ../View/Setting.php");
            exit();
        }else{
            $_SESSION['error'] = "Invalid Phone format";
             echo $_SESSION['error'];
            header("Location: ../View/Setting.php");
        }
    } catch (PDOException $e) {
        // Handle database errors here
        echo "Database Error: " . $e->getMessage();
         header("Location: ../View/404page.html");
        exit();
    }
} else {
    header("Location: ../View/Setting.php");
    exit();
}
