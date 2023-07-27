<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class=" ml-56 h-screen">
        <header class=" border-gray-300 border-b-2 h-20 flex justify-between items-center bg-white">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="moon-outline"></ion-icon></li>
                    <li><ion-icon name="notifications-outline"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="60px"></li>
                </ul>
            </div>
        </header>
        <p class=" p-3">Orders</p>
        <div class="relative overflow-x-auto py-5 px-5">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-blue-200 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
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
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
                        </td>

                    </tr>
                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            1
                        </th>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4">
                            12.4.2023
                        </td>
                        <td class="px-6 py-4">
                            Complete
                        </td>
                        <td class="px-6 py-4">
                            Bank Deposit
                        </td>
                        <td class="px-6 py-4">
                            <input type="button" value="View">
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
    </main>
</body>

</html>