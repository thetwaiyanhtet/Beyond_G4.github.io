<?php
include "./adminsidebar.php";
include "../Controller/orderDetailController.php";
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
                          $storeName = $merchantInfoDetail['store_name'];
                          echo $storeName;
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/schdule.png" alt="cart" class="w-[26px]">
                    <p><?php
                        
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/bulid.png" alt="cart" class="w-[26px]">
                    <p><?php
                        ?> 
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/car.png" alt="cart" class="w-[26px]">
                    <!-- <p><?php
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
                        } ?> </p> -->
                </div>
            </div>
            <!--Customer Details-->
            <div class=" w-64 h-56 border border-solid shadow-lg rounded-lg">
                <p class="m-2">Customer Details</p>
                <hr>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/people.png" alt="cart" class="w-[26px]">
                    <p class="text-sm">
                        <?php
                         $customerName =  $customerInfoDetail['username'];
                         echo $customerName;
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/email.png" alt="cart" class="w-[26px]">
                    <p class="text-sm">
                        <?php
                          $customerEmail =  $customerInfoDetail['email'];
                          echo $customerEmail;
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/phone.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                          $customerPhone =  $customerInfoDetail['phone'];
                          echo $customerPhone;
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/home.png" alt="cart" class="h-7">
                    <p class="text-sm">
                        <?php
                         echo $Region['r_name'].' , ' . $Township['t_name'].' , '.  $customerStreet;
                        ?>
                    </p>
                </div>
            </div>
        </div>
   
        <!-- <table class="mt-5 h-32 shadow-lg w-[60%] mx-auto">
            <thead>
                <tr>
                    <td class="border border-slate-40 p-2">Payment Address</td>
                    <td class="border border-slate-40 p-2">Delivery Address</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-40  p-2">
                        
                    <td class="border border-slate-40  p-2">
                        </td> 
                </tr>
            </tbody>
        </table> -->
        
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
                           $productName = $productInfo['name'];
                           echo $productName;
                        ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php
                          $productQu = $getData['quantity'];
                          echo $productQu;
                        ?>
                        </td>
                        <td class="px-6 py-4">
                        <?php
                         $price = $getData['price_per_unit'];
                         echo $price;
                        ?>
                        </td>
                        <td class="px-6 py-4">
                        <!-- <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT total_amt FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);
                            $sql->execute();
                            $totalPrice = $sql->fetchColumn();
                            echo $totalPrice;
                        }
                        ?>  -->
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
                        <!-- <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../Model/model.php";
                            $sql = $pdo->prepare("SELECT delivery_fee FROM m_order WHERE id=:id");
                            $sql->bindValue(":id", $id);
                            $sql->execute();
                            $deliveryFee = $sql->fetchColumn();
                            echo '$'. $deliveryFee;
                        }
                        ?> -->
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
                        <!-- <?php
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
                        ?> -->
                        </td>
                    </tr>
            </tbody>
        </table>
    </main>
</body>

</html>