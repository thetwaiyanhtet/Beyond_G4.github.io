<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/transaction.css">
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
        <section class=" p-5">
            <div class="w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                <p class=" p-3 font-semibold">Transaction</p>
                <div class="relative overflow-x-auto">
                    <table class="text-sm w-full text-left text-gray-500 m-auto">
                        <thead class="text-xs text-gray-700 uppercase bg-blue-200 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CUSTOMER
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    DATE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    TOTAL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    METHOD
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    STATUS
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-green-500">
                                    Approved
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="" checked>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-yellow-500">
                                    Pendng
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-green-500">
                                    Approved
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-yellow-500">
                                    Pending
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-green-500">
                                    Approved
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-yellow-500">
                                    Pending
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-green-500">
                                    Approved
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-yellow-500">
                                    Pending
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-green-500">
                                    Approved
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    1
                                </th>
                                <td class="px-6 py-4">
                                    Steve Rogers
                                </td>
                                <td class="px-6 py-4">
                                    12-04-2023
                                </td>
                                <td class="px-6 py-4">
                                    $2564
                                </td>
                                <td class="px-6 py-4">
                                    M-BANKING
                                </td>
                                <td class="px-6 py-4 text-yellow-500">
                                    Pending
                                </td>
                                <td class="px-6 py-4">
                                    <input type="checkbox" name="" id="">
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