<?php
session_start();
include "./sidebar.php";

// include "../Controller/deliveryDetailController.php";

$storedData = $_SESSION["deliveries"];
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link rel="stylesheet" href="./resources/css/delivery.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/navbar.css">

</head>

<body>
    <main class=" ml-56 relative">
        <!-- <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p id="date_time"></p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="../../<?= $storedData[0]["logo"] ?>" alt="..." class=" rounded-full w-16"></li>
                </ul>
            </div>
        </header> -->
        <div class="pl-5 pt-3 font-semibold text-lg">Delivery</div>
        <div class=" float-right flex justify-between max-lg:ml mt-3">
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

        <div class=" clear-both p-5">
            <div class="p-3 rounded-lg shadow-xl border-2  mt-3 border-blue-950">
                <div class="relative overflow-x-auto py-3">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-900 uppercase bg-blue-200 text-center ">
                            <tr>
                                <th scope="col" class="px-6 py-3 ">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    Order ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Customer Name
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
                            <?php
                            $id = 0;
                            if (isset($storedData)) {
                                foreach ($storedData as $delivery) { ?>

                                    <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                            <?= ++$id; ?>.
                                        </th>
                                        <td class="px-6 py-4">
                                            <?= $delivery["generate_id"] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $delivery["username"] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <?= $delivery["order_date"] ?>
                                        </td>

                                        <td class="px-6 py-4 ">
                                            Ks <?= $delivery["total_amt"] ?>
                                        </td>
                                        <td class=" pr-2 py-4 ">
                                            <?= $delivery["delivery_name"] ?>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div id="popupButton" class="font-medium text-blue-600  hover:underline">View Details</div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr class=" border-b hover:bg-gray-200 border-gray-500">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                        
                                    </th>
                                    <td class="px-6 py-4">
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                    </td>

                                    <td class="px-6 py-4 ">
                                       
                                    </td>
                                    <td class=" pr-2 py-4 ">
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                    </td>
                                </tr>
                            <?php } ?>
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