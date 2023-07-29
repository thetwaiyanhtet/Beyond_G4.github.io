<?php
include "./sidebar.php";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/report.css">
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
        <div class="flex justify-between mt-6 pl-5">
            <div class="flex space-x-3">
                <button class="w-[220px] h-[40px]  rounded-md bg-[#1366D9] flex items-center justify-center 
         font-poppins text-white">Sale reports</button>
                <a href="./orderReport.php">
                    <button class="w-[220px] h-[40px]  rounded-md bg-[#D9D9D9] flex items-center justify-center 
         font-poppins text-black transition-all duration-200 hover:bg-[#1366D9] hover:text-white">Order reports</button>
                </a>
            </div>

            <button class="p-2 border border-[#1366D9] rounded-lg mr-7  transition-all duration-200 hover:bg-[#1366D9] hover:text-white">Export to CSV</button>
        </div>
        <div class="flex items-center float-right mt-3 pr-5 pb-5 ">
            <span class="flex p-1 border rounded-lg">
                <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
            </span>
            <span>-</span>
            <span class="flex p-1 border rounded-lg">
                <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
            </span>
        </div>

        <section class=" p-5">
            <div class=" clear-both w-full rounded-lg p-2 shadow-xl border-2 border-blue-950 mt-3 ">
                <div class="relative overflow-x-auto py-3">
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
                                    quantity sold
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    date
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            
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

                                <td class="px-16 py-4">
                                    9
                                </td>
                                <td class="px-16 py-4 ">
                                    $9900
                                </td>
                                <td class="px-6 py-4">
                                    24/07/2023
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

                                <td class="px-16 py-4">
                                    9
                                </td>
                                <td class="px-16 py-4 ">
                                    $9900
                                </td>
                                <td class="px-6 py-4">
                                    24/07/2023
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

                                <td class="px-16 py-4">
                                    9
                                </td>
                                <td class="px-16 py-4 ">
                                    $9900
                                </td>
                                <td class="px-6 py-4">
                                    24/07/2023
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

                                <td class="px-16 py-4">
                                    9
                                </td>
                                <td class="px-16 py-4 ">
                                    $9900
                                </td>
                                <td class="px-6 py-4">
                                    24/07/2023
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

                                <td class="px-16 py-4">
                                    9
                                </td>
                                <td class="px-16 py-4 ">
                                    $9900
                                </td>
                                <td class="px-6 py-4">
                                    24/07/2023
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

                                <td class="px-16 py-4">
                                    9
                                </td>
                                <td class="px-16 py-4 ">
                                    $9900
                                </td>
                                <td class="px-6 py-4">
                                    24/07/2023
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-between items-center py-2 px-3">
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