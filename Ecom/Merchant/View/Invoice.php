<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <main class="ml-56">
        <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center">
            <div class=" pl-2">
                <p>2023/July/24 - 4:04 PM</p>
            </div>
            <div>
                <ul class="flex space-x-5 items-center pr-5">
                    <li><ion-icon name="moon-outline" class=" text-xl"></ion-icon></li>
                    <li><ion-icon name="notifications-outline" class=" text-xl"></ion-icon></li>
                    <li><img src="./resources/img/amazfit.png" alt="..." width="60px"></li>
                </ul>
            </div>
        </header>
        <p class=" font-poppins m-2">Order > Invoice </p>
        <div class=" w-[400px] h-[730px] rounded-lg border border-solid m-auto mt-5 mb-5 bg-bg-color">
            <p class=" font-poppins text-center font-bold text-lg mt-5">Thank you for Your Business</p>
            <p class="text-center text-base mt-1">Your Order</p>
            <p class="text-center text-sm text-gray-400  mt-1">Friday , July 14 2023 at 4:04 PM</p>
            <div class="m-auto w-64 border-solid border-b-2 border-gray-300 flex justify-between mt-5"></div>
            <div class="m-auto w-64 border-solid border-b-2 border-gray-300 flex justify-between mt-3">
                <p class="mb-3">Something</p>
                <p class="mb-3">$20.00</p>
            </div>
            <div class="m-auto w-64 border-solid border-b-2 border-gray-300 flex justify-between mt-3">
                <p class="mb-3">Something</p>
                <p class="mb-3">$20.00</p>
            </div>
            <div class="m-auto w-64 border-solid border-b-2 border-gray-300 flex justify-between mt-3">
                <p class="mb-3">Something</p>
                <p class="mb-3">$20.00</p>
            </div>
            <div class="m-auto w-64 border-solid border-b-2 border-gray-300 flex justify-between mt-3">
                <p class="mb-3">Sub Total</p>
                <p class="mb-3">$20.00</p>
            </div>
            <div class="m-auto w-64 border-solid border-b-2 border-gray-300 flex justify-between mt-3">
                <p class="mb-3">Tax</p>
                <p class="mb-3">$20.00</p>
            </div>
            <div class="m-auto w-64 border-solid border-b-2 border-black flex justify-between mt-3">
                <p class="mb-3">Delivery Fee</p>
                <p class="mb-3">$20.00</p>
            </div>
            <div class="m-auto w-64 border-solid border-b-2 border-black flex justify-between mt-3">
                <p class="mb-3">Total</p>
                <p class="mb-3">$120.00</p>
            </div>
            <p class="text-center font-bold text-lg m-5">Your Details</p>

            <div class="m-auto w-80 border-solid border-b-2 border-t-2 border-gray-300 flex justify-between mt-3">
                <p class="m-3 text-justify font-normal">Shipping to</p>
                <p class="m-3 text-sm text-center">$No.31 One Street,Pyay Road,Yangon</p>
            </div>
            <div class="m-auto w-80 border-solid border-b-2 border-gray-300 flex justify-between mt-3">
                <p class="m-3 text-justify font-normal">Billed With</p>
                <p class="m-3">Kpay</p>
            </div>
            <p class="text-center mt-2">Thank You For Being a Great Customer.</p>
        </div>
    </main>

</body>

</html>