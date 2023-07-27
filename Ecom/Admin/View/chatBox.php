<?php
include "./adminsidebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatBox</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/customers.css">
</head>

<body>
    <main class=" ml-[265px] py-5 mt-10" id="main">
        <div class="flex">
            <div class="w-96 h-[750px] border border-solid">
                <div class="border border-solid w-64 h-10 rounded-lg bg-bcolor m-5">
                    <ion-icon name="search-outline" class="pl-2 pt-2"></ion-icon>
                    <input type="text" placeholder="Search" class="pl-2 bg-transparent focus:outline-none">
                </div>
                <hr>
                <div class="w-[286px] h-16 flex justify-around space-x-2 border-b border-solid">
                    <img src="./resources/img/Ellipse 126.png" alt="c1" class="h-11 ml-2 mt-2">
                    <div class="w-44 h-16 m-3">
                        <p class=" font-poppins text-xs">Jessica</p>
                        <p class="font-poppins text-[10px]">Why did the dog go to the vet?..</p>
                    </div>
                </div>
                <div class="w-[286px] h-16 flex justify-around space-x-2 border-b border-solid">
                    <img src="./resources/img/Ellipse 126.png" alt="c1" class="h-11 ml-2 mt-2">
                    <div class="w-44 h-16 m-3">
                        <p class=" font-poppins text-xs">Jessica</p>
                        <p class="font-poppins text-[10px]">Why did the dog go to the vet?..</p>
                    </div>
                </div>
                <div class="w-[286px] h-16 flex justify-around space-x-2 border-b border-solid">
                    <img src="./resources/img/Ellipse 126.png" alt="c1" class="h-11 ml-2 mt-2">
                    <div class="w-44 h-16 m-3">
                        <p class=" font-poppins text-xs">Jessica</p>
                        <p class="font-poppins text-[10px]">Why did the dog go to the vet?..</p>
                    </div>
                </div>
                <div class="w-[286px] h-16 flex justify-around space-x-2 border-b border-solid">
                    <img src="./resources/img/Ellipse 126.png" alt="c1" class="h-11 ml-2 mt-2">
                    <div class="w-44 h-16 m-3">
                        <p class=" font-poppins text-xs">Jessica</p>
                        <p class="font-poppins text-[10px]">Why did the dog go to the vet?..</p>
                    </div>
                </div>
                <div class="w-[286px] h-16 flex justify-around space-x-2 border-b border-solid">
                    <img src="./resources/img/Ellipse 126.png" alt="c1" class="h-11 ml-2 mt-2">
                    <div class="w-44 h-16 m-3">
                        <p class=" font-poppins text-xs">Jessica</p>
                        <p class="font-poppins text-[10px]">Why did the dog go to the vet?..</p>
                    </div>
                </div>
                <div class="w-[286px] h-16 flex justify-around space-x-2 border-b border-solid">
                    <img src="./resources/img/Ellipse 126.png" alt="c1" class="h-11 ml-2 mt-2">
                    <div class="w-44 h-16 m-3">
                        <p class=" font-poppins text-xs">Jessica</p>
                        <p class="font-poppins text-[10px]">Why did the dog go to the vet?..</p>
                    </div>
                </div>
            </div>

            <div class="w-[800px] h-[750px] border border-solid">
                <div class="flex space-x-3 space-y-5 w-56 h-20">
                    <img src="./resources/img/Ellipse 132.png" alt="" class="h-10 mt-5 m-2">
                    <p class="text-center pt-3">Gustavo</p>
                </div>
                <hr>
                <!--Merchant Text-->
                <div class="flex space-x-2 m-5">
                    <img src="./resources/img/Ellipse 132.png" alt="customer" class="h-10 mt-11">
                    <div>
                        <div class=" w-20 h-auto border border-solid bg-table rounded-md text-white p-2 text-center">Hello</div>
                        <div class=" w-80 h-auto border border-solid bg-table text-white  rounded-xl rounded-b-lg p-2 text-sm">
                            And welcome to the Los Pollos Hermanos family. My name is Gustavo, but you can call me "Gus".
                        </div>
                        <div class="w-96 h-auto border border-solid  text-white bg-table rounded-xl rounded-b-lg p-2 text-sm mt-2">
                            I am thrilled that you'll be joining our team. Each and every day, we serve our customers exceptional food, with impecable service. We take pride in everything that we do.
                        </div>
                        <span class=" text-gray-400 text-sm">Gustavo</span>
                        <span class="ml-3 text-xs text-gray-400">10:24 AM</span>
                    </div>
                </div>
                <!--Admin Text -->
                <div class="float-right">
                    <div class="flex space-x-2 m-5">
                        <div>
                            <div class=" w-20 h-auto border border-solid bg-table rounded-md text-white p-2 text-center ml-64 mb-2">Hello</div>
                            <div class=" w-80 h-auto border border-solid bg-table text-white  rounded-xl rounded-b-lg p-2 text-sm ml-10">
                                And welcome to the Los Pollos Hermanos family. My name is Gustavo, but you can call me "Gus".
                            </div>
                            <div class="w-96 h-auto border border-solid  text-white bg-table rounded-xl rounded-b-lg p-2 text-sm mt-2 ">
                                I am thrilled that you'll be joining our team. Each and every day, we serve our customers exceptional food, with impecable service. We take pride in everything that we do.
                            </div>
                            <span class=" text-gray-400 text-sm">Gustavo</span>
                            <span class="ml-3 text-xs text-gray-400">10:24 AM</span>
                        </div>
                        <img src="./resources/img/Ellipse 132.png" alt="customer" class="h-10 mt-40">
                    </div>
                </div>
                <input type='text' class="w-[700px] rounded-xl bg-bcolor border border-solid focus:outline-none ml-28 p-3 m-4"></input>
                <img src="./resources/img/fluent_send-32-filled.png" alt="send" class="w-8 inline-flex m-2" >

            </div>
        </div>

    </main>
</body>

</html>