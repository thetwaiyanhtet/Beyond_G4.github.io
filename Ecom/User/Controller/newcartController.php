<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start(); 
}
include "../Model/model.php";
$carted = [];
 
    # code...

    if (isset($_POST['product_id'])) {
       
        if (isset($_SESSION['usercart'])) {
            // unset($_SESSION['usercart']);
            $item_array_id = array_column($_SESSION['usercart'], "product_id");

            if (false) {
                // echo "<script>alert('Product is already added in the cart')</script>";
                // echo "<script> window.location = '../View/mainPage.php'  </script>";

            } else {
                $count =  count($_SESSION['usercart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']

                );

                $_SESSION['usercart'][$count] = $item_array;
            }
        } else {
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            $_SESSION['usercart'][0] = $item_array;
        }


        function uniqueAssoc($array)
        {
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

        $cart =  $uniqueArray;

        $_SESSION['carttle'] = $cart;
    }

// header("Location: ../View/mainPage.php");
