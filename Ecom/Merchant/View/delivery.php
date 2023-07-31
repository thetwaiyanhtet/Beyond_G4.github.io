<?php
include "./sidebar.php";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/delivery.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">

</head>

<body>
    <main class=" ml-56 h-screen relative">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p>July/27/2023 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
                </ul>
            </div>
        </header>
        <div class="pl-5 pt-3 font-semibold text-lg">Delivery</div>
        <div class="flex justify-between max-lg:ml mt-3">
            <div class="pt-2 pl-5 relative text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute bg-white right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
            <div class=" flex pr-5">
                <span class="flex p-1 border  rounded-lg">
                    <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
                </span>
                <span class="mt-3">-</span>
                <span class="flex p-1 border rounded-lg">
                    <input type="date" name="" id="" class="outline-none text-[#756e6ef7]">
                </span>
            </div>
        </div>

        <div class=" p-5">
            <div class="p-3 rounded-lg shadow-xl border-2  mt-3 border-blue-950">
                <div class="relative overflow-x-auto py-3">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-900 uppercase bg-blue-200 text-center ">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start">
                                    Customer Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Order No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Order Date
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Total Price
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Delivery Service
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class=" text-center">
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <div id="popupButton" class="font-medium text-blue-600  hover:underline">View Details</div>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" id="popupButton" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                            <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-start ">
                                    Kyaw Swarr Myo
                                </th>
                                <td class="px-6 py-4">
                                    #001
                                </td>
                                <td class="px-6 py-4">
                                    07/24/2023
                                </td>

                                <td class="px-6 py-4 ">
                                    2000.0
                                </td>
                                <td class=" pr-2 py-4 ">
                                    Royal Express
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600  hover:underline">View Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-between items-center py-2 px-3 pt-5">
                        <a href="#"><button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Previous</button></a>
                        <div>Page 1 of 10</div>
                        <a href="#"><button class="  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Next</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="detailPopup" class=" max-lg:left-40 space-y-3 absolute top-[30%] left-[35%] p-4 shadow-lg rounded-md bg-gray-300 hidden">
            <div>
                <span>Customer Name : </span>
                <span>user</span>
            </div>
            <div>
                <span>Address : </span>
                <span>Ahlone, Yangon</span>
            </div>
            <div>
                <span>Phone No : </span>
                <span>09-123456789</span>
            </div>
            <div>
                <span>Order Date : </span>
                <span>12/07/2023</span>
            </div>
            <div>
                <span>Total Price :</span>
                <span>$200</span>
            </div>
            <div>
                <span>Delivery Service : </span>
                <span>Royal Express</span>
            </div>
            <div>
                <span>Delivery Charges : </span>
                <span>$20</span>
            </div>
            <div>
                <span>Total Amount : </span>
                <span>$220</span>
            </div>
            <a href="./delivery.php"> <button id="cancelPopupButton" class="bg-blue-500 text-white py-2 px-3 rounded-md mx-auto flex items-center mt-3">Cancel</button></a>
        </div>

        <script>
            // Get references to the popup and buttons
            const detailPopup = document.getElementById("detailPopup");
            const popupButton = document.getElementById("popupButton");
            const cancelPopupButton = document.getElementById("cancelPopupButton");

            // Function to toggle the visibility of the popup and blur the background
            function toggleDetailPopup() {
                detailPopup.classList.toggle("hidden");
            }

            // Attach click event listeners to the logout button and cancel button
            popupButton.addEventListener("click", toggleDetailPopup);
            cancelPopupButton.addEventListener("click", toggleDetailPopup);
        </script>
    </main>
</body>

</html>