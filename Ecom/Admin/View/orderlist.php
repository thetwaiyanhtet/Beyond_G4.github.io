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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/customers.css">
</head>

<body>
    <main class=" ml-72 mt-24 py-5">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-poppins">Order list</p>

            <section class=" py-3">
                <div class=" flex justify-start items-center space-x-3">
                    <p class="text-lg">Search : </p>
                    <input type="text" class="border bg-bcolor rounded-md indent-1 px-2 py-1 outline-none">
                </div>
            </section>

            <section class="border rounded-lg shadow-lg p-2">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs uppercase bg-table text-white border rounded-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Merchant Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Options
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
                                
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                                <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                            <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                            <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                            <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                            <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                            <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
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
                               Derek Kyaw
                            </td>
                            <td class="px-6 py-4">
                               Lanmadaw, Yangon
                            </td>
                            <td class="px-6 py-4">
                                $4500.00
                            </td>
                            <td class="px-6 py-4">
                                11 July 2023
                            </td>
                            <td class="px-6 py-4 flex space-x-3">
                            <a href="./orderDetail.php"><img src="./resources/img/eye.svg" alt="" class="ml-5"></a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </section>
        </div>


    </main>
</body>

</html>