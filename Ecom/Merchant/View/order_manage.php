<?php
include "../Controller/orderController.php";
//include "../Controller/searchOrderController.php";
include "./sidebar.php";

// $cusName = $_SESSION["getCusName"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/searchOrder.js"></script>
    <script src="./resources/js/dateandtime.js "></script>
    <link rel="stylesheet" href="./resources/css/order.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">
</head>

<body>
    <main class=" ml-56">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center bg-white">
            <div class=" pl-2">
                <p id="date_time"></p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="../../<?= $orders[0]["logo"] ?>" alt="..." class=" rounded-full w-16"></li>
                </ul>
            </div>
        </header>
        <section class="p-5">
            <p class=" text-lg font-semibold">Orders</p>
            <div class=" py-5 w-60">
                <input type="search" class="inputBox" placeholder="Search Here" id="search">
            </div>
            <div class="relative overflow-x-auto py-5 px-5 rounded-lg shadow-xl border-2 border-blue-950">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-200 text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Order ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Order Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment
                            </th>
                            <th scope="col" class="px-5 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class=" text-center" id="searchResult">
                        <?php $id = 0 ?>
                        <?php foreach ($orders as $order) { ?>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                    <?= ++$id ?>.
                                </th>
                                <td class="px-6 py-4">
                                    <?= $order["generate_id"]; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $order["username"]; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $order["order_date"]; ?>
                                </td>
                                <td class="pl-20 py-4">
                                    <?php if ($order["payment_status"] == 0) { ?>
                                        <div class="text-yellow-500  w-3/5 text-center rounded-md pr-5">
                                            Pending
                                        </div>
                                    <?php } ?>
                                    <?php if ($order["payment_status"] == 1) { ?>
                                        <div class="text-green-500  w-3/5 text-center rounded-md pr-5">
                                            Complete
                                        </div>
                                    <?php } ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php if ($order["payment_id"] == 0) { ?>
                                        Visa

                                    <?php } ?>
                                    <?php if ($order["payment_id"] == 1) { ?>
                                        KBZ pay
                                    <?php } ?>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="./orderDetail.php?id=<?= $order["generate_id"]; ?>" class="font-medium text-blue-600  hover:underline">View</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="flex justify-between items-center py-2 pt-5 px-3">
                    <div><button class=" hover:underline border-violet-400 border-2 bg-transparent rounded-md px-3 py-2">Previous</button></div>
                    <div>Page 1 of 10</div>
                    <div><button class=" hover:underline border-violet-400 border-2 bg-transparent rounded-md px-3 py-2">Next</button></div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>