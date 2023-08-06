<?php
include "./adminsidebar.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/resources/css/orderlist.css">
</head>

<body>
    <main class="ml-72 pt-20" id="main">
        <p class=" font-philosopher text-xl font-bold pt-14">Order Details</p>
        <div class="flex item-center justify-center pt-10 ">
            <!--Order Details-->
            <div class=" w-64 h-56 border-2 border-solid shadow-lg rounded-lg mr-10">
                <p class="m-2">Order Details</p>
                <hr>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/cart.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT merchant_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $merchantID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT store_name FROM m_merchant WHERE merchant_id=:merchantID");
                                $sql2->bindValue(":merchantID", $merchantID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $storeName = $sql2->fetchColumn();
                                    echo $storeName;
                                }
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/schdule.png" alt="cart" class="w-[26px]">
                    <p><?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT product_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $productID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT create_date FROM m_orderdetails WHERE product_id=:productID");
                                $sql2->bindValue(":productID", $productID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $orderDate = $sql2->fetchColumn();
                                    echo $orderDate;
                                }
                            }
                        } ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/bulid.png" alt="cart" class="w-[26px]">
                    <p><?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT product_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $productID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT warehouse FROM m_orderdetails WHERE product_id=:productID");
                                $sql2->bindValue(":productID", $productID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $supplierDate = $sql2->fetchColumn();
                                    echo $supplierDate;
                                }
                            }
                        } ?> </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/car.png" alt="cart" class="w-[26px]">
                    <p><?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT product_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $productID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT delivery FROM m_orderdetails WHERE product_id=:productID");
                                $sql2->bindValue(":productID", $productID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $delivery = $sql2->fetchColumn();
                                    echo $delivery;
                                }
                            }
                        } ?> </p>
                </div>
            </div>
            <!--Customer Details-->
            <div class=" w-64 h-56 border border-solid shadow-lg rounded-lg">
                <p class="m-2">Customer Details</p>
                <hr>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/people.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT customer_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $customerID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT username FROM m_customer WHERE customer_id=:customerID");
                                $sql2->bindValue(":customerID", $customerID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $customerName = $sql2->fetchColumn();
                                    echo $customerName;
                                }
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/email.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT customer_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $customerID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT email FROM m_customer WHERE customer_id=:customerID");
                                $sql2->bindValue(":customerID", $customerID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $customerEmail = $sql2->fetchColumn();
                                    echo $customerEmail;
                                }
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/phone.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT customer_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $customerID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT phone FROM m_customer WHERE customer_id=:customerID");
                                $sql2->bindValue(":customerID", $customerID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $customerPhone = $sql2->fetchColumn();
                                    echo $customerPhone;
                                }
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/home.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT customer_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $customerID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT customer_str,customer_city,customer_ds FROM m_customer WHERE customer_id=:customerID");
                                $sql2->bindValue(":customerID", $customerID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $customerAddress = $sql2->fetch(PDO::FETCH_ASSOC);
                                    echo $customerAddress['customer_str'] . ',' . $customerAddress['customer_city'] . ',' . $customerAddress['customer_ds'];
                                }
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <!--Address list-->
        <table class="mt-5 h-32 shadow-lg w-[60%] mx-auto">
            <thead>
                <tr>
                    <td class="border border-slate-40 p-2">Payment Address</td>
                    <td class="border border-slate-40 p-2">Delivery Address</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-40  p-2">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT customer_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $customerID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT customer_str,customer_city,customer_ds FROM m_customer WHERE customer_id=:customerID");
                                $sql2->bindValue(":customerID", $customerID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $customerAddress = $sql2->fetch(PDO::FETCH_ASSOC);
                                    echo $customerAddress['customer_str'] . ',' . $customerAddress['customer_city'] . ',' . $customerAddress['customer_ds'];
                                }
                            }
                        }
                        ?>
                    <td class="border border-slate-40  p-2">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT customer_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $customerID = $sql->fetchColumn();

                                $sql2 = $pdo->prepare("SELECT customer_str,customer_city,customer_ds FROM m_customer WHERE customer_id=:customerID");
                                $sql2->bindValue(":customerID", $customerID);

                                if (!$sql2->execute()) {
                                    echo "Error executing the second query.";
                                } else {
                                    $customerAddress = $sql2->fetch(PDO::FETCH_ASSOC);
                                    echo $customerAddress['customer_str'] . ',' . $customerAddress['customer_city'] . ',' . $customerAddress['customer_ds'];
                                }
                            }
                        }
                        ?></td>
                </tr>
            </tbody>
        </table>
        <!---Product list-->
        <table class="w-[90%] text-sm text-left text-white m-5">
            <thead class="text-xs text-white uppercase bg-table">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Unit Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr class="border border-b text-black">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-black">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT product_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $productID = $sql->fetchColumn();
                              
                                $sql = $pdo->prepare("SELECT proudct_name FROM m_orderdetails WHERE product_id =:product_id ");
                                $sql->bindValue(":product_id", $productID);
                                $sql->execute();
                                $product_name = $sql->fetchColumn();
                                echo $product_name;
                            }
                        }
                        ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT product_id FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);

                            if (!$sql->execute()) {
                                echo "Error executing the query.";
                            } else {
                                $productID = $sql->fetchColumn();
                              
                                $sql = $pdo->prepare("SELECT product_qty FROM m_orderdetails WHERE product_id =:product_id ");
                                $sql->bindValue(":product_id", $productID);
                                $sql->execute();
                                $product_name = $sql->fetchColumn();
                                echo $product_name;
                            }
                        }
                        ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT total_amt FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);
                            $sql->execute();
                            $totalPrice = $sql->fetchColumn();
                            echo $totalPrice;
                        }
                        ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT total_amt FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);
                            $sql->execute();
                            $totalPrice = $sql->fetchColumn();
                            echo $totalPrice;
                        }
                        ?> 
                        </td>
                    </tr>
                    <tr class="border border-b text-black">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">

                        </th>
                        <td class="px-6 py-4">

                        </td>
                        <td class="px-6 py-4">
                            Sub-Total
                        </td>
                        <td class="px-6 py-4">
                            $4500.00
                        </td>
                    </tr>
                    <tr class="border border-b text-black">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">

                        </th>
                        <td class="px-6 py-4">

                        </td>
                        <td class="px-6 py-4">
                            Delivery Rate
                        </td>
                        <td class="px-6 py-4">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT delivery_fee FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);
                            $sql->execute();
                            $deliveryFee = $sql->fetchColumn();
                            echo '$'. $deliveryFee;
                        }
                        ?>
                        </td>
                    </tr>
                    <tr class="border border-b text-black">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">

                        </th>
                        <td class="px-6 py-4">

                        </td>
                        <td class="px-6 py-4 font-bold">
                            Total
                        </td>
                        <td class="px-6 py-4 font-bold">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT delivery_fee,total_amt FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);
                            $sql->execute();
                            $Price = $sql->fetch(PDO::FETCH_ASSOC);
                            $deliveryFee = $Price['delivery_fee'];
                            $totalPrice = $Price['total_amt'];
                            echo '$'. $deliveryFee;
                        }
                        ?>
                        </td>
                    </tr>
            </tbody>
        </table>
    </main>
</body>

</html>