<?php
// Add input validation and sanitization here if necessary

if (isset($_POST["send"])) {
    $shopName = $_POST['shopName'];
    $email = $_POST['email'];
    $phNo = $_POST['phNo'];
    $address = $_POST['address'];
    $merchant_email = $_SESSION["merchant_ID"];
    $img = $_FILES['photo']['name'];
    $imgTmp = $_FILES['photo']['tmp_name'];


    include "../Model/model.php";

    try {
        $sql = $pdo->prepare("SELECT id FROM m_merchant WHERE email=:email");
        $sql->bindValue(":email", $merchant_email);
        $sql->execute();
        $merchant_data = $sql->fetch(PDO::FETCH_ASSOC);
        $merchant_id = $merchant_data['id'];

        move_uploaded_file($imgTmp,"../../Storage/profile/".$img);
        $sql = $pdo->prepare("UPDATE m_merchant SET store_name=:shopName,email=:email,phone=:phone,address=:address, logo=:img WHERE id=:merchant_id");
        $sql->bindValue(":merchant_id", $merchant_id);
        $sql->bindValue(":shopName", $shopName);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phNo);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":img","/Storage/profile/.$img");
        $sql->execute();

        // Redirect to a success page after successful update
        header("Location: ../View/Setting.php");
        exit();
    } catch (PDOException $e) {
        // Handle database errors here
        echo "Database Error: " . $e->getMessage();
        // Optionally, you can redirect to an error page
        // header("Location: ../View/error_page.html");
        exit();
    }
} else {
    // Redirect to a 404 page if the form was not submitted
    header("Location: ../View/Setting.php");
    exit();
}
?>
