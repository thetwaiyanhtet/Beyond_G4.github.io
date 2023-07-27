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
</head>

<body>
    <main class="ml-72 pt-20" id="main">
        <p class="m-5 font-poppins text-xl font-bold">Order Details</p>
        <div class="flex justify-around">
            <!--Order Details-->
            <div class=" w-64 h-56 border-2 border-solid shadow-lg rounded-lg">
                <p class="m-2">Order Details</p>
                <hr>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/cart.png" alt="cart" class="w-[26px]">
                    <p>Shop Kit</p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/schdule.png" alt="cart" class="w-[26px]">
                    <p>July 16 , 2023 </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/bulid.png" alt="cart" class="w-[26px]">
                    <p>July 16 , 2023 </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/car.png" alt="cart" class="w-[26px]">
                    <p>July 16 , 2023 </p>
                </div>
            </div>
            <!--Customer Details-->
            <div class=" w-64 h-56 border border-solid shadow-lg rounded-lg">
                <p class="m-2">Customer Details</p>
                <hr>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/people.png" alt="cart" class="w-[26px]">
                    <p>Derek Kyaw</p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/email.png" alt="cart" class="w-[26px]">
                    <p>Email Sample </p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/phone.png" alt="cart" class="w-[26px]">
                    <p> 09-123456789</p>
                </div>
                <div class="flex space-x-2 m-4">
                    <img src="./resources/img/home.png" alt="cart" class="w-[26px]">
                    <p> Lanmadaw, Yangon</p>
                </div>
            </div>
        </div>
        <!--Address list-->
        <table class="mt-5 h-32 shadow-lg w-[90%]">
            <thead>
                <tr>
                    <td class="border border-slate-40 p-2">Payment Address</td>
                    <td class="border border-slate-40 p-2">Delivery Address</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-40  p-2">No.26, Ye Min Qtr, Shwe Kyar Tsp,
                        Ayarwaddy.</td>
                    <td class="border border-slate-40  p-2">No.26, Ye Min Qtr, Shwe Kyar Tsp,
                        Ayarwaddy.</td>
                </tr>
            </tbody>
        </table>
        <!---Product list-->
           <table class="w-[90%] text-sm text-left text-white mt-5">
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
                            iPhone 14 Pro Max
                        </th>
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            $4500.00
                        </td>
                        <td class="px-6 py-4">
                            $4500.00
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
                            $50.00
                        </td>
                    </tr>
                    <tr class="border border-b text-black">
                        <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                           
                        </th>
                        <td class="px-6 py-4">
                           
                        </td>
                        <td class="px-6 py-4">
                           Total
                        </td>
                        <td class="px-6 py-4">
                            $4550.00
                        </td>
                    </tr>
                </tbody>
            </table>
    </main>
</body>

</html>