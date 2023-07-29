<?php
include "./sidebar.php"
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
    <link rel="stylesheet" href="./resources/css/reviewNRating.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body class=" font-poppins">
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
        <div class="flex font-semibold pt-3 pl-3">
            <span class="text-2xl pr-3"><i class='bx bx-star'></i></span>
            <span class="text-lg">Review & Rating</span>
        </div>

        <section class=" p-5">
            <div class=" w-full h-full  rounded-lg p-3 shadow-xl border-2 border-blue-950">
                <!-- ====== Table Section Start -->
                <section class="bg-white pt-3">
                    <div class="container">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="max-w-full overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead>
                                            <tr class="bg-primary text-center">
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                            rounded-tl-md
                           ">
                                                    Customer Name
                                                </th>
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           ">
                                                    Product Name
                                                </th>
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           ">
                                                    Rating
                                                </th>
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4
                           ">
                                                    Comments
                                                </th>
                                                <th class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-0
                           lg:py-2
                           px-3
                           lg:px-4 rounded-tr-md
                           ">
                                                    Details
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           "> Kyaw Swar Phyo
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Nikon 950 Full HD Plus
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Good Quality
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <div id="popupButton" class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</div>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           ">
                                                    Han Myo Htun
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Outwear & Coats
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    This product is no longer needed
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           "> Kyaw Swar Phyo
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Nikon 950 Full HD Plus
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Good Quality
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           ">
                                                    Han Myo Htun
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Outwear & Coats
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    This product is no longer needed
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           "> Kyaw Swar Phyo
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Nikon 950 Full HD Plus
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Good Quality
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           ">
                                                    Han Myo Htun
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Outwear & Coats
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    This product is no longer needed
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           "> Kyaw Swar Phyo
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Nikon 950 Full HD Plus
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Good Quality
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           ">
                                                    Han Myo Htun
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Outwear & Coats
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    This product is no longer needed
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           ">
                                                    Han Myo Htun
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Outwear & Coats
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    This product is no longer needed
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b  border-gray-500
                           ">
                                                    Han Myo Htun
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    Outwear & Coats
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <div>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star text-yellow-500'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-gray-500
                           ">
                                                    This product is no longer needed
                                                </td>
                                                <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           
                           border-b border-gray-500
                           ">
                                                    <button>
                                                        <a class="font-medium text-blue-600  hover:underline" href="./reviewandratingdetail.php">View details</a>
                                                    </button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Table Section End -->
                <div class="flex justify-between items-center py-2 px-3 pt-5">
                    <a href="#"><button class=" border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Previous</button></a>
                    <div>Page 1 of 10</div>
                    <a href="#"><button class="  border-violet-400 border-2 bg-transparent rounded-md px-3 py-2 hover:underline">Next</button></a>
                </div>
            </div>
        </section>
        <div id="detailPopup" class="hidden">
            <div class=" fixed left-[45%] top-[20%] border bg-gray-200 rounded-md shadow-lg">
                <img src="./resources/img/camera.png" alt="" class=" hover:transition-all hover:duration-300 hover:scale-125">
                <div class=" p-3 space-y-3">
                    <p class=" font-semibold">Nikon 950 Full HD Plus </p>
                    <p>
                        <i class='bx bx-star text-yellow-500'></i>
                        <i class='bx bx-star text-yellow-500'></i>
                        <i class='bx bx-star text-yellow-500'></i>
                        <i class='bx bx-star text-yellow-500'></i>
                        <i class='bx bx-star'></i>
                        <span>/</span>
                        <span>Kyaw Swar Phyo</span>
                    </p>
                    <p class=" text-gray-500">Good Quality!!</p>
                    <div>
                        <span class=" text-gray-500 pt-5">Category : </span>
                        <span>Camera</span>
                    </div>
                    <div class=" border-t-2 border-blue-500 py-3">
                        <div><button id="cancelButton" class="mb-3 text-white rounded-md float-right bg-blue-500 py-1 px-3">Close</button></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Get references to the popup and buttons
            const detailPopup = document.getElementById("detailPopup");
            const popupButton = document.getElementById("popupButton");
            const cancelButton = document.getElementById("cancelButton");

            // Function to toggle the visibility of the popup and blur the background
            function toggleDetailPopup() {
                detailPopup.classList.toggle("hidden");
            }

            // Attach click event listeners to the logout button and cancel button
            popupButton.addEventListener("click", toggleDetailPopup);
            cancelButton.addEventListener("click", toggleDetailPopup);
        </script>

    </main>
</body>

</html>