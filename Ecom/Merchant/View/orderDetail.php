<?php
include "../Controller/orderDetailController.php";
include "./sidebar.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="stylesheet" href="./resources/css/order.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">
</head>

<body>
    <main class="ml-56 relative">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p id="date_time"></p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="../../<?= $orderDetails[0]["logo"] ?>" alt="..." class=" rounded-full w-16"></li>
                </ul>
            </div>
        </header>
        <div class="flex justify-between">
            <div class="flex m-2 items-center">
                <img src="./resources/img/fluent_people-32-filled.png" alt="" class="h-8">
                <p class="m-2 font-semibold text-lg">Order Details</p>
            </div>
        </div>
        <form action="./delivery.php" method="post">
            <?php
            // Calculate the sum of ordered products
            $totalSum = 0;
            foreach ($orderDetails as $order) {
                // Calculate the total amount for each ordered product
                $totalAmount = $order['quantity'] * $order['sellprice'];
                // Sum up the total amount for all ordered products
                $totalSum += $totalAmount;
            } ?>
            <div class="flex justify-between w-[55%]">
                <!--Order Details-->
                <div class="w-full h-auto border border-solid shadow-xl m-5 ml-10 rounded-lg">
                    <p class="m-2 font-philosopher font-semibold text-xl">Order Details</p>
                    <hr>
                    <div class="m-2">
                        <p class="m-2">Name : <?= $orderDetails[0]["username"] ?></p>
                        <p class="m-2">Order Date : <?= $orderDetails[0]["order_date"] ?></p>
                        <p class="m-2">Total Amount : Ks <?= $totalSum ?></p>
                        <?php if ($orderDetails[0]["payment_id"] == 0) { ?>
                            <p class="m-2">Payment : Visa </p>
                        <?php } else if ($orderDetails[0]["payment_id"] == 1) { ?>
                            <p class="m-2">Payment : KBZ Pay</p>
                        <?php } ?>
                    </div>
                </div>
                <!--Delivery-->
                <div class="w-full h-auto border border-solid shadow-xl m-5 rounded-lg">
                    <p class="m-2 font-philosopher font-semibold text-xl">Delivery Address</p>
                    <hr>
                    <div class="m-2">

                        <p class="m-2">Phone : <?= $orderDetails[0]["phone"] ?></p>
                        <p class="m-2">Address : <?= $orderDetails[0]["street"] ?></p>
                        <p class="m-2">Township : <?= $orderDetails[0]["t_name"] ?></p>
                        <p class="m-2">Region/State : <?= $orderDetails[0]["r_name"] ?></p>
                        <p class="m-2">Delivery Services: Royal Express</p>
                    </div>
                </div>
            </div>
            <!--Product Summary-->
            <div class="w-[1000px] h-auto border border-solid shadow-xl ml-10 rounded-lg">
                <p class="m-5 font-philosopher font-semibold text-xl">Product Summary</p>
                <table class="table-auto w-full">
                    <thead class=" text-sm text-gray-700 uppercase bg-blue-200 h-11">
                        <tr class="text-center">
                            <th class="text-center px-5">No</th>
                            <th class="w-40 text-center px-5">Product Name</th>
                            <th class="w-40 text-center  px-5">Product Image</th>
                            <th class="w-44 text-center  px-5">Product Quantity</th>
                            <th class="w-40 text-center  px-5">Product Price</th>
                            <th class="w-44 text-center  px-5">Product Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class=" text-center">
                        <?php $productCount = 0; ?>
                        <?php foreach ($orderDetails as $orderDetail) { ?>
                            <tr class="border-b">
                                <td class="py-4"><?= ++$productCount; ?>.</td>
                                <td class=" text-left pl-6"><?= $orderDetail["name"] ?></td>
                                <td><img src="../../User/View/<?= $orderDetail["p_one"] ?>" alt="..." width="40px" class=" mx-auto"></td>
                                <td> <?= $orderDetail["quantity"] ?></td>
                                <td>Ks <?= $orderDetail["sellprice"] ?></td>
                                <td>Ks <?= $orderDetail["sellprice"] * $orderDetail["quantity"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

                <div class="flex justify-between">
                    <p class="m-5">Sub Total</p>
                    <p class="m-5 mr-11 font-semibold">Ks <?= $totalSum ?></p>
                </div>
                <div class="flex justify-between">
                    <p class="ml-5">Delivery Fee</p>
                    <p class="m-1 mr-11">Ks 3000 </p>
                </div>
                <hr>
                <div class="flex justify-between py-4">
                    <p class="ml-5">Total Amount</p>
                    <p class="m-1 mr-11 font-semibold"> = Ks <?= $totalSum + 3000 ?></p>
                </div>
            </div>
            <div class=" py-7 absolute left-[52%] flex">
                <div class="ml-3 items-center flex space-x-2">
                    <input type="checkbox" id="invoice" class=" w-5 h-5">
                    <label for="invoice">Invoice</label>
                </div>
                <button class=" w-24 rounded-md p-2 ml-6 border border-gray-500 bg-transparent mr-3">Cancel</button>
                <button type="submit" class="w-32 rounded-md bg-blue-700 p-2 text-white">Deliver</button>
            </div>
        </form>
    </main>
</body>

</html>