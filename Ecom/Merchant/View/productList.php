<?php
include "./sidebar.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/inventory.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="moon-outline" class=" text-xl"></ion-icon></li>
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" p-3 font-semibold">Inventory</p>
            <div class=" flex-col justify-center px-5 py-1">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Overall Inventory</h1>
                    <div class=" flex justify-between pb-3">
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div>Categories</div>
                                <div>10</div>
                                <div class=" text-sm">Last 7 Days</div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col space-y-3">
                                <div>Total Products</div>
                                <ul class=" flex justify-between">
                                    <li>
                                        <div>404</div>
                                    </li>
                                    <li>
                                        <div>$2500</div>
                                    </li>
                                </ul>
                                <ul class=" flex space-x-5 text-sm">
                                    <li>
                                        <div>Last 7 Days</div>
                                    </li>
                                    <li>
                                        <div>Revenue</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col space-y-3">
                                <div>Top Selling</div>
                                <ul class=" flex justify-between">
                                    <li>
                                        <div>10</div>
                                    </li>
                                    <li>$500</li>
                                </ul>
                                <ul class=" flex space-x-5 text-sm">
                                    <li>
                                        <div>Last 7 Days</div>
                                    </li>
                                    <li>
                                        <div>Cost</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col space-y-3">
                                <div>Low Stocks</div>
                                <ul class=" flex justify-between ">
                                    <li>
                                        <div>10</div>
                                    </li>
                                    <li>4</li>
                                </ul>
                                <ul class=" flex space-x-5 text-sm">
                                    <li>
                                        <div>Ordered</div>
                                    </li>
                                    <li>
                                        <div>Out of Stock</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950 mt-3">
                    <div class="flex justify-between items-center">
                        <p class="">Products</p>
                        <div class="flex space-x-3">
                            <a href="./addNewProduct.php"><button class="btn">Add Product</button></a>
                            <button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 hover:bg-[#1366D9] hover:text-white">Download All</button>
                        </div>
                    </div>

                    <div class="relative overflow-x-auto py-5">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-blue-200 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Product id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        buying Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        selling price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        availablity
                                    </th>
                                    <th scope="col" class=" text-center py-3">
                                        <span>Action</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-green-500">
                                        In-Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" border-b  hover:bg-gray-200 border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Microsoft Surface Pro
                                    </th>
                                    <td class="px-6 py-4">
                                        #201
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop Pc
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-yellow-500">
                                        Low-Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-red-500">
                                        Out of Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-green-500">
                                        In-Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-yellow-500">
                                        Low-Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-red-500">
                                        Out of Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-green-500">
                                        In-Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-red-500">
                                        Out of Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-red-500">
                                        Out of Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr class=" hover:bg-gray-200 border-b border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">
                                        #101
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $999
                                    </td>
                                    <td class="px-6 py-4">
                                        $1100
                                    </td>
                                    <td class="px-6 py-4">
                                        9
                                    </td>
                                    <td class="px-6 py-4">
                                        24/07/2023
                                    </td>
                                    <td class="px-6 py-4 text-yellow-500">
                                        Low-Stock
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex justify-between items-center py-2 pt-5 px-3">
                            <div><button class=" hover:underline border-violet-400 border-2 bg-transparent rounded-md px-3 py-2">Previous</button></div>
                            <div>Page 1 of 10</div>
                            <div><button class=" hover:underline border-violet-400 border-2 bg-transparent rounded-md px-3 py-2">Next</button></div>
                        </div>
                    </div>

                </div>
        </section>
    </main>
</body>

</html>