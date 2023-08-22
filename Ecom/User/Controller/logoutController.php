<?php
session_start();
include "../Model/model.php";
if(isset($_POST['logout'])){
    

    session_destroy();
    header("Location: ../View/mainPage.php");
}
?>