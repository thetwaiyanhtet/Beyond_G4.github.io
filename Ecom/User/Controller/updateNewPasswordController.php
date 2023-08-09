<?php
session_start();
ini_set('display_errors', '1');
try {
    if (isset($_POST['changePw'])) {
      header("Location: ../View/mainPage.php");
    }
  } catch (PDOException $e) {
    // Handle the exception
    echo "Error: " . $e->getMessage();
  }