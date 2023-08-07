<?php
session_start();
include "../Model//Model_test.php";
$db_handle = new cartControl();

if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM m_cart WHERE code='" . $_GET["code"] . "'");
                $itemArray = array(
                    $productByCode[0]["code"] => array(
                        'name' => $productByCode[0]["name"],
                        'code' => $productByCode[0]["code"],
                        'quantity' => $_POST["quantity"],
                        'price' => $productByCode[0]["price"],
                        'image' => $productByCode[0]["image"]
                    )
                );

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["code"] == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
<<<<<<< Updated upstream
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $v['code'])
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
=======
            if (!empty($_GET["code"]) && !empty($_SESSION["cart_item"])) {
                $codeToRemove = $_GET["code"];
                if (isset($_SESSION["cart_item"][$codeToRemove])) {
                    unset($_SESSION["cart_item"][$codeToRemove]);
>>>>>>> Stashed changes
                }
                
            }
            echo $_SESSION["cart_item"];
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
<<<<<<< Updated upstream
  header("location: ../View/mainPage.php");
=======
    print_r($_SESSION["cart_item"]);
    // header("location: ../View/mainPage.php");
>>>>>>> Stashed changes
}
