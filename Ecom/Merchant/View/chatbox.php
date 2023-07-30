<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBox</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/css/chatbox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>


<body>
    <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center ml-56">
        <div class="pl-2">
            <p>2023/July/24 - 4:04 PM</p>
        </div>
        <div class=" pr-2">
            <ul class="flex space-x-5 items-center pr-3">
                <li><ion-icon name="moon-outline" class="text-xl"></ion-icon></li>
                <li><ion-icon name="notifications-outline" class="text-xl"></ion-icon></li>
                <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
            </ul>
        </div>
    </header>
    <p class="m-5 ml-64 font-semibold text-lg">Chat Box</p>
    <main class="ml-56 w-auto h-auto relative">
        <!--Customer-->
        <div class=" text-white w-[325px] h-full border border-solid m-3 bg-gradient-to-b from-sky-500 via-gray-300 to-sky-800 rounded-lg space-y-3">
            <div class="border border-solid w-64 h-10 rounded-lg m-5 bg-black border-black">
                <ion-icon name="search-outline" class="pl-2 pt-2 text-white"></ion-icon>
                <input type="text" placeholder="Search" class="pl-2 bg-transparent focus:outline-none text-white">
            </div>
            <div class=" w-[320px] h-[51px] flex justify-around space-x-2 border-b-2 border-gray-500 pb-5">
                <img src="./resources/img//logo.png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Admin</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div>
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Group 1000004118.png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">yah,nice design</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <!-- <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div> -->
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div>
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <!-- <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div> -->
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div>
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <!-- <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div> -->
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <!-- <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div> -->
                </div>
            </div>
            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Hello</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <!-- <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div> -->
                </div>
            </div>
        </div>
        <!--ChatBox-->
        <div class=" text-white w-[930px] h-full border border-solid bg-gradient-to-b from-sky-500 via-gray-300 to-sky-800 absolute top-0 rounded-lg left-[360px]">
            <div class="w-[930px] h-[70px] border-solid border-b-2 border-gray-900">
                <div class="flex items-center space-x-2 p-3">
                    <img src="./resources/img/Group 1000004118.png" alt="" class="h-12">
                    <p class="mt-2 text-xl font-bold">Customer1</p>
                </div>
            </div>
            <!--Customer Text-->
            <div class="flex space-x-2 p-3">
                <img src="./resources/img/Mask group (1).png" alt="customer" class="h-10">
                <div>
                    <span>Customer</span>
                    <span class="ml-3 text-xs text-gray-200">10:24 AM</span>
                    <div class=" mt-2 w-56 h-10 border border-solid bg-black text-white border-black rounded-tr-lg rounded-b-lg text-center p-2 text-sm">
                        Hi, this is items available
                    </div>
                    <div class="w-56 h-10 border border-solid bg-black text-white border-black rounded-tr-lg rounded-b-lg text-center p-2 text-sm mt-2">
                        Hi, this is items available
                    </div>
                </div>
            </div>
            <!--Merchant Text-->
            <div class="float-right">
                <div class="flex justify-between">
                    <div>
                        <div class="ml-20">
                            <span class="mr-3 text-xs text-gray-200">10:24 AM</span>
                            <span>Admin</span>
                        </div>
                        <div class="w-56 h-10 border border-solid bg-black text-white border-black rounded-tl-lg rounded-b-lg text-center p-2 text-sm">
                            Hi, this is items available
                        </div>
                    </div>
                    <img src="./resources/img/Mask group (1).png" alt="customer" class="h-10 m-2">
                </div>
            </div>

            <!--TextBox-->
            <!-- <div class="w-full h-[60px] bg-text-bg absolute bottom-0 rounded-b-lg flex items-center justify-around">
                <input type='text' class="w-[830px] rounded-xl bg-white border-[#1E1F25] text-text3 border border-solid indent-2 focus:outline-none p-2" placeholder="Add to text"></input>
                <img src="./resources/img/Shape.png" alt="send" class=" pr-5">
            </div> -->

            <div class="bg-gray-300 p-4 flex items-center justify-around">
                <input class="flex items-center h-10 md:w-96 w-64 rounded px-3 text-sm focus:outline-none" type="text" placeholder="Type your message…">
                <img src="./resources/img/send.png" alt="sent" class="h-5">
            </div>

        </div>

    </main>
</body>

</html>