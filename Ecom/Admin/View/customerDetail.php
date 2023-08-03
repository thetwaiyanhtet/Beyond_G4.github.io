<?php
include "./adminsidebar.php";
include "../Controller/customerDetailController.php";
//print_r($customerDetail);
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/customers.css">
</head>

<body>
    <main id="main" class=" ml-72 pt-10 font-poppins p-5">
        <p class="font-bold ">“Customer Name” Profile</p>
        <div class=" flex justify-center pr-5 py-6">
            <div class=" w-screen h-full rounded-lg p-5 border border-gray-400 shadow-md">
                <h1 class="  font-bold font-philosopher">Customer Information</h1>
                
                    <div class=" flex-col space-y-3 w-full py-4">
                        <div class=" flex">
                            <p class=" w-40">Email</p>
                            <p class=" w-20">-</p>
                            <p class=" "><?= $customerDetail["email"]; ?></p>
                        </div>
                        <div class=" flex">
                            <p class="w-40">phone</p>
                            <p class=" w-20">-</p>
                            <p class=" "><?= $customerDetail["phone"]; ?></p>
                        </div>
                        <div class="flex">
                            <p class="w-40">Address</p>
                            <p class=" w-20">-</p>
                            <p class=""><?= $customerDetail["township"]; ?></p>
                        </div>
                    </div>
                
            </div>
        </div>

        <div class=" flex justify-center pr-5 py-3">
            <div class="flex w-full h-full rounded-lg p-5 border border-gray-400 shadow-md space-x-20 ">
                <div class=" w-full h-full  rounded-lg pt-7 pb-7 pl-6 pr-6 shadow-xl border border-gray-400">
                    <div class=" flex justify-around items-center space-x-5 p-3">
                        <div class="w-[80px] h-[80px] bg-[#2535A1] flex items-center justify-center rounded-lg">
                            <img src="./resources/img/cart.svg" alt="..." class=" w-14">
                        </div>
                        <div class=" text-center">
                            <p class=" font-semibold ">Orders</p>
                            <p class=" opacity-60">6</p>
                        </div>
                    </div>
                </div>
                <div class=" w-full h-full  rounded-lg pt-7 pb-7 pl-6 pr-6 shadow-xl border border-gray-400">
                    <div class=" flex justify-around items-center space-x-5 p-3">
                        <div class="w-[80px] h-[80px] bg-[#45D953] flex items-center justify-center rounded-lg">
                            <img src="./resources/img/cart.svg" alt="..." class=" w-14">
                        </div>
                        <div class=" text-center">
                            <p class=" font-semibold ">Purchased</p>
                            <p class=" opacity-60">5060</p>
                        </div>
                    </div>
                </div>
                <div class=" w-full h-full  rounded-lg pt-7 pb-7 pl-6 pr-6 shadow-xl border border-gray-400">
                    <div class=" flex justify-around items-center space-x-5 p-3">
                        <div class="w-[80px] h-[80px] bg-[#2097F6] flex items-center justify-center rounded-lg">
                            <img src="./resources/img/cart.svg" alt="..." class=" w-14">
                        </div>
                        <div class=" text-center">
                            <p class=" font-semibold ">Amount</p>
                            <p class=" opacity-60">$1175</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3rd section -->
        <div class=" flex justify-center pr-5 py-3">
            <div class="flex flex-col w-full rounded-lg  border border-gray-400 shadow-md ">
                <p class=" font-bold p-5 border border-b-black h-14">All purchased products</p>

                <div class="flex justify-between p-5">
                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>

                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>

                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>
                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between p-5">
                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>

                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>

                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>
                    <div class=" flex flex-col  w-[222px] h-[330px] rounded-lg  shadow-xl border border-gray-400">
                        <img src="./resources/img/admin shirt.png" alt="..." class="w-full">
                        <div class="pl-3 pb-2">
                            <p class=" font-semibold ">Casual Shirt</p>
                            <p class=" opacity-60">$195.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3rd section end -->

        <!-- 4th section -->
        <div class=" flex justify-center pr-5 py-3">
            <div class=" w-full rounded-lg p-2 shadow-xl border border-gray-400 mt-3  ">
                <p class="text-lg font-bold p-3 ">Recent Orders</p>
                <div class="relative overflow-x-auto py-3">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-white uppercase bg-table ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Merchant Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Shipping Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Iphone 14 Pro Max
                                </th>
                                <td class="px-6 py-4">
                                    Shop Kit
                                </td>
                                <td class="px-6 py-4">
                                    $4500.00
                                </td>

                                <td class="px-6 py-4 ">
                                    11 July 2023
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-[103px] h-[10px] bg-[#45D953] rounded-lg"></div>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Iphone 14 Pro Max
                                </th>
                                <td class="px-6 py-4">
                                    Shop Kit
                                </td>
                                <td class="px-6 py-4">
                                    $4500.00
                                </td>

                                <td class="px-6 py-4 ">
                                    11 July 2023
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-[103px] h-[10px] bg-[#45D953] rounded-lg"></div>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Iphone 14 Pro Max
                                </th>
                                <td class="px-6 py-4">
                                    Shop Kit
                                </td>
                                <td class="px-6 py-4">
                                    $4500.00
                                </td>

                                <td class="px-6 py-4 ">
                                    11 July 2023
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-[103px] h-[10px] bg-[#45D953] rounded-lg"></div>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Iphone 14 Pro Max
                                </th>
                                <td class="px-6 py-4">
                                    Shop Kit
                                </td>
                                <td class="px-6 py-4">
                                    $4500.00
                                </td>

                                <td class="px-6 py-4 ">
                                    11 July 2023
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-[103px] h-[10px] bg-[#45D953] rounded-lg"></div>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Iphone 14 Pro Max
                                </th>
                                <td class="px-6 py-4">
                                    Shop Kit
                                </td>
                                <td class="px-6 py-4">
                                    $4500.00
                                </td>

                                <td class="px-6 py-4 ">
                                    11 July 2023
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-[103px] h-[10px] bg-[#45D953] rounded-lg"></div>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    Iphone 14 Pro Max
                                </th>
                                <td class="px-6 py-4">
                                    Shop Kit
                                </td>
                                <td class="px-6 py-4">
                                    $4500.00
                                </td>

                                <td class="px-6 py-4 ">
                                    11 July 2023
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-[103px] h-[10px] bg-[#45D953] rounded-lg"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- 4th section end -->

    </main>

</body>

</html>