<?php
include "./adminsidebar.php";
include "../Controller/orderDetailController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
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
                        echo $orderDetail[0]['store_name'];
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/schdule.png" alt="cart" class="w-[26px]">
                    <p><?php
                        echo $orderDetail[0]['order_date'];
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/bulid.png" alt="cart" class="w-[26px]">
                    <p><?php
                        echo $orderDetail[0]['create_date']
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/car.png" alt="cart" class="w-[26px]">
                    <p>
                        <?php
                        echo $orderDetail[0]['delivery_name'];
                        ?> </p>
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
                        echo $orderDetail[0]['username']
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/email.png" alt="cart" class="w-[26px]">
                    <p class="text-sm">
                        <?php
                        echo $orderDetail[0]['email']
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/phone.png" alt="cart" class="w-[26px]">
                    <p class="text-sm">
                        <?php
                        echo $orderDetail[0]['phone']
                        ?>
                    </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/home.png" alt="cart" class="h-7">
                    <p class="text-sm">
                        <?php
                        echo $orderDetail[0]['r_name'] . $orderDetail[0]['t_name'] . $orderDetail[0]['street'];
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
                <?php foreach ($orderDetail as  $order) { ?>
                    <tr class="border border-b text-black">

                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-black">
                            <?php
                            echo $order['name'];
                            ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php
                            echo $order['quantity'];
                            ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php
                            echo '$' . $order['sellprice']
                            ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php
                            $total = $order['quantity'] * $order['sellprice'];
                            echo '$' . $total;
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                <tr class="border border-b text-black">
                    <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">

                    </th>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4">
                        Sub-Total
                    </td>
                    <td class="px-6 py-4">
                        <?php
                        echo '$' . $order['total_amt']
                        ?>
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
                        echo '$' . $order['delivery_fees'];
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
                        $total = $order['delivery_fees'] + $order['total_amt'];
                        echo '$' . $total;
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>