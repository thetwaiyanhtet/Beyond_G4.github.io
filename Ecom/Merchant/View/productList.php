<?php
session_start();

// echo "<pre>";
// print_r($result);
include "./sidebar.php";
include "../Controller/productListController.php";
$result = $_SESSION["m_product"];

// echo "<pre>";
// print_r($result);
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
    <link rel="stylesheet" href="./resources/css/navbar.css">
    <script src="./resources/js/dateandtime.js " defer></script>
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p id="date_time"></p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
                </ul>
            </div>
        </header>
        <section>
            <p class=" pt-3 pl-5 pb-1 font-semibold text-lg">Inventory</p>
            <div class=" flex-col justify-center px-5 py-1">
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                    <h1 class=" text-lg font-bold font-philosopher pb-5">Overall Inventory</h1>
                    <div class=" flex justify-between pb-3">
                        <div class=" flex justify-center ">
                            <div class=" flex-col justify-center space-y-3">
                                <div class=" text-violet-600">Categories</div>
                                <div>10</div>
                                <div class=" text-sm">Last 7 Days</div>
                            </div>
                        </div>
                        <div class=" flex justify-center ">
                            <div class=" flex-col space-y-3">
                                <div class=" text-sky-500">Total Products</div>
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
                                <div class=" text-green-500">Top Selling</div>
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
                                <div class=" text-yellow-500">Low Stocks</div>
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
                        <p class=" font-philosopher font-bold text-lg">Products</p>
                        <div class="flex space-x-3">
                            <a href="./addNewProduct.php"><button class="btn">Add Product</button></a>
                            <button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 hover:text-white hover:bg-[#1366D9]">Download All</button>
                        </div>
                    </div>

                    <div class="relative overflow-x-auto py-5">

                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-blue-200 text-center ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Product id
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start">
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
                            <?php foreach ($result as $product) { ?>
                                <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    <?= $product["name"];?>
                                    </th>
                                    <td class="px-6 py-4">
                                    <?= $product["product_id"];?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?= $product["c_name"];?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?= $product["buyprice"];?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?= $product["sellprice"];?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?= $product["instock"];?>
                                    </td>
                                    <td class="px-6 py-4">
                                    <?= $product["date"];?>
                                    </td>

                                    <?php if($product["instock"] > 10) {?>
                                    <td class="px-6 py-4 text-green-500">
                                        Instock
                                    </td>
                                    <?php } else if($product["instock"] < 10 && $product["instock"] >= 1 ){ ?>
                                        <td class="px-6 py-4 text-red-500">
                                        Low stock
                                    </td>
                                    <?php } else {?>
                                        <td class="px-6 py-4 text-red-500">
                                        Out of Stock
                                    </td>
                                    <?php }?>
                                    <td class="px-6 py-4 text-right">
                                        <a href="../Controller/editProductController.php?id=<?= $product["productID"] ?>" class="font-medium text-blue-600  hover:underline">Edit</a>
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

                </div>
            </div>
        </section>
    </main>
</body>

</html>