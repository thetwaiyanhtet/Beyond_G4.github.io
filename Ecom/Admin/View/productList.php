<?php
include "./adminsidebar.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/products.css">
    
</head>

<body>
    <main id="main" class=" ml-72 mt-24 py-5">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher">Product List</p>

            <section class=" py-3">
                <div class=" flex justify-start items-center space-x-3">
                    <p>Search : </p>
                    <input type="text" class=" bg-gray-300 rounded-md shadow-md indent-1 px-2 py-1 outline-none">
                </div>
            </section>

            <section class="border-2 border-gray-400 rounded-lg shadow-lg p-2">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs uppercase bg-table text-white border rounded-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Merchant Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stock
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Edit
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                               <img src="./resources/img/smartWatch.png" alt="...">
                            </th>
                            <td class="px-6 py-2">
                                Smart Watch
                            </td>
                            <td class="px-6 py-2">
                                Ai Mobile
                            </td>
                            <td class="px-6 py-2">
                                $399
                            </td>
                            <td class="px-6 py-2">
                                100
                            </td>
                            <td class="px-6 py-2 ">
                                <a href="./productDetails.php" class="font-medium text-blue-600  hover:underline">View Details</a>
                            </td>
                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="./resources/img/iph.png" alt="...">
                            </th>
                            <td class="px-6 py-2">
                                iPhone 14 Pro Max
                            </td>
                            <td class="px-6 py-2">
                                Ai Mobile
                            </td>
                            <td class="px-6 py-2">
                                $399
                            </td>
                            <td class="px-6 py-2">
                                100
                            </td>
                            <td class="px-6 py-2 ">
                                <a href="./productDetails.php" class="font-medium text-blue-600  hover:underline">View Details</a>
                            </td>
                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="./resources/img/dellLaptop.png" alt="...">
                            </th>
                            <td class="px-6 py-2">
                                Dell Laptop
                            </td>
                            <td class="px-6 py-2">
                                Ai Mobile
                            </td>
                            <td class="px-6 py-2">
                                $399
                            </td>
                            <td class="px-6 py-2">
                                100
                            </td>
                            <td class="px-6 py-2">
                                <a href="./productDetails.php" class="font-medium text-blue-600  hover:underline">View Details</a>
                            </td>
                        </tr>
                        <tr class=" border-b hover:bg-gray-200 border-gray-500">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="./resources/img/keyboard.png" alt="...">
                            </th>
                            <td class="px-6 py-2">
                                Keyboard
                            </td>
                            <td class="px-6 py-2">
                                Ai Mobile
                            </td>
                            <td class="px-6 py-2">
                                $399
                            </td>
                            <td class="px-6 py-2">
                                100
                            </td>
                            <td class="px-6 py-2 ">
                                <a href="./productDetails.php" class="font-medium text-blue-600  hover:underline">View Details</a>
                            </td>
                        </tr>
                        <tr class=" hover:bg-gray-200">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                <img src="./resources/img/camera.png" alt="...">
                            </th>
                            <td class="px-6 py-2">
                                Camera
                            </td>
                            <td class="px-6 py-2">
                                Ai Mobile
                            </td>
                            <td class="px-6 py-2">
                                $399
                            </td>
                            <td class="px-6 py-2">
                                100
                            </td>
                            <td class="px-6 py-2 ">
                                <a href="./productDetails.php" class="font-medium text-blue-600  hover:underline">View Details</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>
        </div>


    </main>
</body>

</html>