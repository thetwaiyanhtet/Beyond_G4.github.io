<?php
session_start();

include "../Model/model.php";
echo "<pre>";
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




//     $checkcart = $pdo->prepare(
//         "SELECT name, p_one, sellprice FROM `m_product` WHERE id = $id");

//     // Your database connection code here
// $connection = new mysqli("localhost", "root", "", "beyond_db");

// if ($connection->connect_error) {
//     die("Connection failed: " . $connection->connect_error);
// }

// // Initialize a variable to store combined query results
// $combined_results = '';

//  // Array of product IDs

// foreach ($cart as $index => $product_id) {
//     // Construct your SQL query
//     $ggid = $product_id["product_id"];
//     $sql = "SELECT name, p_one, sellprice FROM `m_product` WHERE id = $ggid";

//     $result = $connection->query($sql);
    

//     if ($result->num_rows > 0) {
//         // Fetch and concatenate each row's data to the combined_results variable
//         while ($row = $result->fetch_assoc()) {
//             $combined_results .= "Product ID: " . $row["name"] . " | Product Name: " . $row["sellprice"] . " | Product Name: " . $row["p_one"] . "\n";
//         }
//     } else {
//         $combined_results .= "No results found for Product ID: $product_id\n";
//     }
// }

// // Close the database connection
// $connection->close();
// }
// // Display the combined results
}

$cart =  $_SESSION['usercart'];

