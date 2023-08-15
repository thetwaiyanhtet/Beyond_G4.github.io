<?php
include "./sidebar.php";
include "../Controller/productListController.php";

$result = $_SESSION["m_product"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/searchProduct.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link rel="stylesheet" href="./resources/css/inventory.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">

</head>

<body class="">
    <main class=" ml-56">
        <section>
            <p class=" pt-3 pl-5 pb-1 font-semibold text-lg">Inventory</p>
            <div class="pl-5 pt-1 w-60">
                <input type="text" class="inputBox text-xs" id="search" placeholder="Search by Name,ID,or category...">
            </div>
            <div class=" flex-col justify-center px-5 py-1">
                
                <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950 mt-3">
                    <div class="flex justify-between items-center">
                        <p class=" font-philosopher font-bold text-lg">Products</p>
                        <div class="flex space-x-3">
                            <a href="./addNewProduct.php"><button class="btn">Add Product</button></a>
                            <!-- <button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 hover:text-white hover:bg-[#1366D9]">Download All</button> -->
                        </div>
                    </div>

                    <div class="relative overflow-x-auto py-5">

                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-blue-200 text-center ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        Product Id
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
                                        Create date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        availablity
                                    </th>
                                    <th scope="col" class=" text-center py-3">
                                        <span>Action</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody id="searchResult">
                                <?php foreach ($result as $product) { ?>
                                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            <?= $product["name"]; ?>
                                        </th>
                                        <td class="px-6 py-4">
                                            <?= $product["id"]; ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $product["c_name"]; ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $product["buyprice"]; ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $product["sellprice"]; ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $product["instock"]; ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $product["create_date"]; ?>
                                        </td>

                                        <?php if ($product["instock"] > 10) { ?>
                                            <td class="px-6 py-4 text-green-500">
                                                Instock
                                            </td>
                                        <?php } else if ($product["instock"] < 10 && $product["instock"] >= 1) { ?>
                                            <td class="px-6 py-4 text-orange-500">
                                                Low stock
                                            </td>
                                        <?php } else { ?>
                                            <td class="px-6 py-4 text-red-500">
                                                Out of Stock
                                            </td>
                                        <?php } ?>
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