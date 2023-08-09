<?php
session_start();
include "../Model/model.php";
echo "<pre>";
if(isset($_POST))
    if(isset($_SESSION['usercart'])) {
       // unset($_SESSION['usercart']);
        $item_array_id = array_column($_SESSION['usercart'],"product_id");
        // $item_array_a = array(
        //     'image' => $_POST['image'],
        //     'product_id' => $_POST['product_id'],
        //     'quantity' => $_POST['quantity']);
            
           
        if (in_array($_POST['product_id'],$item_array_id)) {
            echo "<script>alert('Product is already added in the cart')</script>";
            echo "<script> window.location = '../View/mainPage.php'  </script>";
            
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
  $cart =  $_SESSION['usercart'];
 // print_r($cart);

// foreach ($cart as $index => $value) {
//     $checkcart = $pdo->prepare(
//         "SELECT name, p_one, sellprice FROM `m_product` WHERE id = $value[0]['product_id'] "
//     );
    
//     $checkcart->execute();
//     $lastcheck += $checkcart->fetchAll(PDO::FETCH_ASSOC);
//     print_r($lastcheck);
// }

// foreach ($cart as $product_id) {
//     $sqltwo =$pdo-> prepare("SELECT * FROM m_product WHERE id = $product_id");
   
//     $sqltwo->execute();
//         $lastcheck += $sqltwo->fetchAll(PDO::FETCH_ASSOC);
//         print_r($lastcheck);
    
// }

