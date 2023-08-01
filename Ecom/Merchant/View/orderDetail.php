<?php
include "./sidebar.php"
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">
</head>

<body>
    <main class="ml-56">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p>July/27/2023 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="60px"></li>
                </ul>
            </div>
        </header>
        <div class="flex justify-between">
            <div class="flex m-2 items-center">
                <img src="./resources/img/fluent_people-32-filled.png" alt="" class="h-8">
                <p class="m-2 font-semibold text-lg">Order Details</p>
            </div>
            <div class="m-2">
                <input type="checkbox" name="" id="">
                <label for="">Invoice</label>
            </div>
        </div>
        <div class="flex justify-between">
            <!--Order Details-->
            <div class="w-96 h-56 border border-solid shadow-xl m-5 ml-10 rounded-lg">
                <p class="m-2">Order Details</p>
                <hr>
                <div class="m-2">
                    <p class="m-2">Name:User</p>
                    <p class="m-2">Order Date: 12-04-2023</p>
                    <p class="m-2">Total Amount: $1500.00</p>
                    <p class="m-2">Payment:Bank Deposit</p>
                </div>
            </div>
            <!--Delivery-->
            <div class="w-96 h-64 border border-solid shadow-xl m-4 rounded-lg">
                <p class="m-2">Delivery Address</p>
                <hr>
                <div class="m-2">
                    <p class="m-2">Name:User</p>
                    <p class="m-2">Phone: 09587746358</p>
                    <p class="m-2">Address: Pyay Road</p>
                    <p class="m-2">City: Yangon</p>
                    <p class="m-2">Delivery services: Royal Express</p>
                    <p class="m-2">Delivery charges: $10.00 </p>
                </div>
            </div>
        </div>
        <!--Product Summary-->
        <div class="w-[900px] h-[390px] border border-solid shadow-xl ml-10 rounded-lg">
            <p class="m-5">Product Summary</p>
            <table class="table-auto w-full">
                <thead>
                    <tr class="text-center">
                        <th class="text-center px-5">No</th>
                        <th class="w-40 text-center px-5">Product Name</th>
                        <th class="w-40 text-center  px-5">Product Image</th>
                        <th class="w-44 text-center  px-5">Product Quantity</th>
                        <th class="w-40 text-center  px-5">Product Price</th>
                        <th class="w-44 text-center  px-5">Product Subtotal</th>
                    </tr>
                <tbody>
                    <tr class="border-b">
                        <th class="py-4">1</th>
                        <th>Samsung</th>
                        <th></th>
                        <th>5</th>
                        <th>$100.00</th>
                        <th>$500.00</th>
                    </tr>
                    <tr class="border-b">
                        <th class="py-4">2</th>
                        <th>Samsung</th>
                        <th></th>
                        <th>5</th>
                        <th>$100.00</th>
                        <th>$500.00</th>
                    </tr>
                    <tr class="border-b">
                        <th class="py-4">3</th>
                        <th>Samsung</th>
                        <th></th>
                        <th>5</th>
                        <th>$100.00</th>
                        <th>$500.00</th>
                    </tr>
                </tbody>
                </thead>
            </table>
            <div class="flex justify-between">
                <p class="m-5">Total Amount</p>
                <p class="m-5 mr-14">$1500</p>
            </div>
            <div class="flex justify-between">
                <p class="ml-5">Delivery Fee</p>
                <p class="m-1 mr-14">$15</p>
            </div>
            <hr>
            <div class="flex justify-between">
                <p class="ml-5">Sub Total</p>
                <p class="m-1 mr-14"> = $1515.00</p>
            </div>
        </div>
        <button class="w-32 rounded-md bg-blue-700 p-2 m-5 float-right text-white">Deliver</button>
        <button class=" w-24 rounded-md p-2 m-5 float-right">Cancel</button>
    </main>



</body>

</html>