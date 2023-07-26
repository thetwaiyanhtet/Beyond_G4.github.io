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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>
<style>
    * {
        outline: 1px solid red;
    }
</style>

<body>
    <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
        <div class="pl-2">
            <p>2023/July/24 - 4:04 PM</p>
        </div>
        <div>
            <ul class="flex space-x-5 items-center pr-3">
                <li><ion-icon name="moon-outline" class="text-xl"></ion-icon></li>
                <li><ion-icon name="notifications-outline" class="text-xl"></ion-icon></li>
                <li><img src="./resources/img/amazfit.png" alt="..." width="50px"></li>
            </ul>
        </div>
    </header>
    <p class="m-5">Chat Box</p>
    <main class="ml-56 w-auto h-screen relative">

       

        <!--Customer-->
        <div class=" w-[325px] h-[480px] border border-solid m-5 bg-gray-400 rounded-lg space-y-3">
            <p class="m-5 font-bold font-poppins text-2xl">Customers</p>
            <div class="border border-solid w-52 h-10 rounded-lg m-5 bg-black border-black">
                <ion-icon name="search-outline" class="pl-2 pt-2 text-white"></ion-icon>
                <input type="text" placeholder="Search" class="pl-2 bg-transparent focus:outline-none text-white">
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
        </div>
        <!--Admin-->
        <div class="w-[325px] h-[150px] border border-solid m-5 bg-gray-400 rounded-lg">
            <p class="m-5 font-bold font-poppins text-2xl">Admin</p>

            <div class=" w-[320px] h-12 flex justify-around space-x-2">
                <img src="./resources/img/Mask group (1).png" alt="c1" class="h-10 ml-2">
                <div class="w-44 h-16">
                    <p class=" font-poppins text-base">Customer1</p>
                    <p class="font-poppins text-sm">Want to Make some changes</p>
                </div>
                <div class="w-18">
                    <p class="mr-1">4:30 PM</p>
                    <div class="w-5 h-5 rounded-full bg-red-700 text-white text-center text-sm m-auto"><span>2</span></div>
                </div>
            </div>

        </div>
        <!--ChatBox-->
        <div class="w-[850px] h-[670px] border border-solid bg-gray-400 absolute top-36 rounded-lg left-96">
            <div class="w-[845px] h-[80px] border-solid border-b-2 border-gray-900">
                <div class="flex space-x-2 m-10">
                    <img src="./resources/img/Group 1000004118.png" alt="" class="h-12">
                    <p class="mt-2 text-xl font-bold">Customer1</p>
                </div>
            </div>
            <!--Customer Text-->
            <div class="flex space-x-2 m-5">
                <img src="./resources/img/Mask group (1).png" alt="customer" class="h-10">
                <div>
                    <span>Customer</span>
                    <span class="ml-3 text-xs text-gray-200">10:24 AM</span>
                    <div class="w-56 h-10 border border-solid bg-black text-white border-black rounded-tr-lg rounded-b-lg text-center p-2 text-sm">
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
            <div class="w-[850px] h-[100px] bg-text-bg absolute bottom-0">
                <input type='text' class="w-[650px] h-10 rounded-xl bg-[#1E1F25] border-[#1E1F25] text-text3 border border-solid text-center focus:outline-none absolute top-7 left-20" placeholder="Add to text"></input>
                <img src="./resources/img/Shape.png" alt="send" class="w-4 absolute top-10 left-[750px]">
            </div>

        </div>

    </main>
</body>

</html>