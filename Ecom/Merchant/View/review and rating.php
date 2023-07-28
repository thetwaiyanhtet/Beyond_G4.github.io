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
    
<header class=" border-gray-300 p-5 border-b-2 h-20 flex justify-between items-center ml-56">
            <div class="pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-3">
                    <li><ion-icon name="moon-outline" class="text-xl"></ion-icon></li>
                    <li><ion-icon name="notifications-outline" class="text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
                </ul>
            </div>
        </header>
    <div class="flex  font-semibold mt-3 float-right w-[78.5%] ">
        <span class="text-3xl pr-3" ><i class='bx bx-star'></i></span>
        <span class="text-2xl">Review & Rating</span>
    </div>
    <div class=" float-right w-[80%]">


        <!-- ====== Table Section Start -->
        <section class="bg-white py-0 lg:py-[20px]">
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
                           border-l border-transparent rounded-tl-md
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Kyaw Swar Phyo
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                            Nikon 950 Full HD Plus
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                        Good Quality
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                            <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                Outwear & Coats
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                           This product is no longer needed 
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                           <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Kyaw Swar Phyo
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                            Nikon 950 Full HD Plus
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                        Good Quality
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                            <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                Outwear & Coats
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                           This product is no longer needed 
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                           <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Kyaw Swar Phyo
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                            Nikon 950 Full HD Plus
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                        Good Quality
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                            <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                Outwear & Coats
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                           This product is no longer needed 
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                           <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "> Kyaw Swar Phyo
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           ">
                            Nikon 950 Full HD Plus
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                        Good Quality
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                            <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                                Outwear & Coats
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
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
                           border-b border-[#E8E8E8]
                           ">
                           This product is no longer needed 
                                        </td>
                                        <td class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                           <button>
                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="./reviewandratingdetail.php">View details</a>
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
    </div>


</body>

</html>