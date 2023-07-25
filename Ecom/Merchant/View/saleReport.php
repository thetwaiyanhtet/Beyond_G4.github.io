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
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex ml-60 h-20 items-center justify-between">
        <p>2023/July/16 - 12:00 AM</p>
        <div class="flex items-center space-x-3">
            <span class=" text-2xl"><i class='bx bx-moon'></i></span>
            <span class=" text-2xl"> <i class='bx bx-bell'></i></span>
            <span class=" text-5xl"><i class='bx bx-user-circle'></i></span>
        </div>
    </div>
    <div class="flex ml-60 justify-between">
        <div class="flex space-x-3">
            <button class="w-[220px] h-[40px]  rounded-md bg-[#1366D9] flex items-center justify-center 
         font-poppins text-white">Sale reports</button>
            <button class="w-[220px] h-[40px]  rounded-md bg-[#D9D9D9] flex items-center justify-center 
         font-poppins text-black transition-all duration-200 hover:bg-[#1366D9] hover:text-white">Order reports</button>
        </div>

        <button class="p-2 border border-[#1366D9] rounded-lg mr-5">Export to CSV</button>
    </div>
    <div class="flex ml-60 items-center float-right mr-5 mt-3">
        <p class="text-2xl font-semibold mr-3">Sale report <h3 class="text-[#756e6ef7] mr-3">for</h3></p>
        <span class="flex p-1 border rounded-lg">
            <img src="../View/resources/img/calendar.svg" alt="" >
            <input type="date" name="" id="" class="outline-none text-[#756e6ef7]" >
        </span>
        <span>-</span>
        <span class="flex p-1 border rounded-lg">
            <img src="../View/resources/img/calendar.svg" alt="">
            <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
        </span>
    </div>
    <table class="ml-60 mt-16 w-[85%]">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">No</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Product name</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Quantity sold</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Total price</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td class="p-3 text-sm text-gray-700">1</td>
                <td class="p-3 text-sm text-gray-700">Demo Product</td>
                <td class="p-3 text-sm text-gray-700">2</td>
                <td class="p-3 text-sm text-gray-700">2000.0</td>
                <td class="p-3 text-sm text-gray-700">07/18/2023</td>
            </tr>
        </tbody>
    </table>

</body>

</html>