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

<body class=" font-poppins">
    <!-- component -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <div class="fixed top-0 left-0 z-40 min-h-screen text-ellipsis flex justify-around">

        <div class="flex flex-col w-56 bg-blue-600 rounded-r-3xl overflow-hidden">
            <div class="flex items-center justify-center h-20 shadow-md">
                <div class="flex justify-items-center items-center justify-center space-x-3">
                    <img class=" w-16" src="./resources/img/logo.png" alt="...">
                    <p class="font-bold text-white text-2xl">Beyond</p>
                </div>
            </div>
            <ul class="flex flex-col py-2">
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-store-alt'></i></span>
                        <span class="text-sm font-medium">Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-dollar-circle'></i></span>
                        <span class="text-sm font-medium">Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-shopping-bag"></i></span>
                        <span class="text-sm font-medium">Shopping</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-package'></i></span>
                        <span class="text-sm font-medium">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-car'></i></span>
                        <span class="text-sm font-medium">Delivery</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-chat'></i></span>
                        <span class="text-sm font-medium">Chat Box</span>
                        <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-message-alt-edit'></i></span>
                        <span class="text-sm font-medium">Review & Rating</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bxs-report'></i></span>
                        <span class="text-sm font-medium">Report</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"></span>
                        <button class=" bg-gray-300 px-4 py-1 rounded-lg">Upgrade Plan</button>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class='bx bx-cog'></i></span>
                        <span class="text-sm font-medium">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-log-out"></i></span>
                        <span class="text-sm font-medium">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div class="flex float-right w-[80%] blur-sm h-20 items-center justify-between">
        <p class="ml-5">Date and Time</p>
        <div class="flex items-center space-x-3">
            <span class=" text-2xl"><i class='bx bx-moon'></i></span>
            <span class=" text-2xl"> <i class='bx bx-bell'></i></span>
            <span class=" text-5xl"><i class='bx bx-user-circle'></i></span>
        </div>
    </div>
    <div class="flex blur-sm float-right w-[78.5%] ">
        <span><i class='bx bx-star'></i></span>
        <span>Review & Rating</span>
    </div>

    <div class=" relative float-right w-[80%]">


        <!-- ====== Table Section Start -->
        <section class="bg-white blur-sm py-0 lg:py-[20px]">
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
                                                <a class="bg-gray-300 py-2 px-3 rounded-md" href="#">View details</a>
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
        <div>
            <div class=" fixed left-[45%] top-[20%] border bg-gray-200 rounded-md shadow-lg">
                <img src="./resources/img/camera.png" alt="">
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
                        <button class="mb-3 text-white rounded-md float-right bg-blue-500 py-1 px-3">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>