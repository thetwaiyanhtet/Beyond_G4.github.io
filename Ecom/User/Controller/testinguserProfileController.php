<?php
include "../Model/model.php";

$signUpEmail = $_SESSION['signUpEmail'];
$loginEmail = $_SESSION["user_ID"];

if (isset($signUpEmail) || isset($loginEmail)) {
    $sql = $pdo->prepare("SELECT * FROM m_customer WHERE email = :email");
    
    if (isset($signUpEmail)) {
        $sql->bindValue(":email", $signUpEmail);
    } elseif (isset($loginEmail)) {
        $sql->bindValue(":email", $loginEmail);
    }
    $sql->execute();
    $_SESSION['checkEmail'] = $sql->fetchAll(PDO::FETCH_ASSOC);

}
?>
