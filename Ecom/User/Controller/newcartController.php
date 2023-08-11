<?php
session_start();

include "../Model/model.php";
// $id = $_POST['product_id'];
$carted = [];
if(isset($_POST['product_id'])){
    if(isset($_SESSION['usercart'])) {
       //  unset($_SESSION['usercart']);
        $item_array_id = array_column($_SESSION['usercart'],"product_id");
        // $item_array_a = array(
        //     'image' => $_POST['image'],
        //     'product_id' => $_POST['product_id'],
        //     'quantity' => $_POST['quantity']);
            
          

           
        if (false) {
            // echo "<script>alert('Product is already added in the cart')</script>";
            // echo "<script> window.location = '../View/mainPage.php'  </script>";
            
        } else{
          $count =  count($_SESSION['usercart']);
          $item_array = array(
            // 'image' => $_POST['image'],
             'product_id' => $_POST['product_id']
            // 'quantity' => $_POST['quantity']
            
        );
       
            $_SESSION['usercart'][$count] = $item_array;
            // print_r($_SESSION['usercart']);
        
        }

    }else{
        $item_array = array(
            'product_id' => $_POST['product_id']
        );
        $_SESSION['usercart'][0] =$item_array;
       // print_r($_SESSION['usercart']);
    }

}

function uniqueAssoc($array) {
    $result = array();
    foreach ($array as $key => $value) {
        if (!in_array($value, $result)) {
            $result[$key] = $value;
        }
    }
    return $result;
}
$cartass = $_SESSION['usercart'];

$uniqueArray = uniqueAssoc($cartass);

// print_r($uniqueArray);

$cart =  $uniqueArray;

// header("Location: ../View/mainPage.php");

