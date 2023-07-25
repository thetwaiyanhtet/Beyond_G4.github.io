<?php
include "./sidebar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center ml-56">
        <div class=" pl-2">
            <p>2023/July/24 - 4:04 PM</p>
        </div>
        <div>
            <ul class="flex space-x-5 items-center pr-3">
                <li><ion-icon name="moon-outline" class="text-xl"></ion-icon></li>
                <li><ion-icon name="notifications-outline" class="text-xl"></ion-icon></li>
                <li><img src="./resources/img/amazfit.png" alt="..." width="60px"></li>
            </ul>
        </div>
    </header>
    <!-- <div class="ml-60 m-5 flex justify-between border-solid border-b-2 pb-3 w-">
        <p class="text-black mt-2">2023/July/25 -2:00 PM</p>
        <div class="flex space-x-5 justify-center items-center">
            <ion-icon name="moon" class="mt-2 text-xl"></ion-icon>
            <ion-icon name="notifications" class="mt-2 text-xl"></ion-icon>
            <img src="./resources/img/Mask group.png" alt="png" class="w-[50px]">
        </div>
    </div> -->
    <p class="font-poppins text-sm ml-60 mt-2">Setting</p>
    <p class="underline text-text2 ml-64 mt-5">Account</p>
    <p class="font-philosopher font-light ml-72 text-base mt-2">logo</p>
    <div class="border border-dashed w-32 h-32 ml-72 rounded-xl border-gray-800 m-2">
        <img src="./resources/img/gallery-add.png" alt="photo" class="w-5 m-auto mt-5">
        <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p>
    </div>
    <div class="w-[80%] ml-64 border border-solid border-gray-400 m-5"></div>
    <form action="">
        <div class="flex space-x-36 m-2">
            <div class="flex flex-col">
                <label for="" class="ml-64 text-sm">Shop Name</label>
                <input type="text" name="" id="" class="w-72 p-1 border border-solid ml-64 rounded-md mt-2">
            </div>
            <div class="flex flex-col">
                <label for="" class="ml-64 text-sm">Email</label>
                <input type="text" name="" id="" class="w-72  p-1 border border-solid ml-64 rounded-md mt-2">
            </div>
        </div>
        <div class="flex space-x-36 m-2">
            <div class="flex flex-col">
                <label for="" class="ml-64 text-sm">Phone number</label>
                <input type="text" name="" id="" class="w-72 p-1 border border-solid ml-64 rounded-md mt-2">
            </div>
            <div class="flex flex-col">
                <label for="" class="ml-64 text-sm">Address</label>
                <input type="text" name="" id="" class="w-72  p-1 border border-solid ml-64 rounded-md mt-2">
            </div>
        </div>
        <div class="flex space-x-36 m-2">
            <div class="flex flex-col">
                <label for="" class="ml-64 text-sm">facebook</label>
                <input type="text" name="" id="" class="w-72 p-1 border border-solid ml-64 rounded-md mt-2">
            </div>
            <div class="flex flex-col">
                <label for="" class="ml-64 text-sm">Instagram</label>
                <input type="text" name="" id="" class="w-72  p-1 border border-solid ml-64 rounded-md mt-2">
            </div>
        </div>
    </form>
    <p class="underline text-text2 ml-64 mt-5">Update Password</p>
    <form action="">
        <div class="flex flex-col">
            <label for="" class="ml-64 text-sm">Old Password</label>
            <input type="text" name="" id="" class="w-72 p-2 border border-solid ml-64 rounded-md mt-2 font-medium" placeholder="Please enter old password">
        </div>
        <div class="flex">
            <div class="flex flex-col">
                <label for="" class="text-sm ml-64">New Password</label>
                <input type="text" name="" id="" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium ml-64" placeholder="Please enter New password">
            </div>
            <div class="flex flex-col">
                <label for="" class="text-sm mt-2 ml-64">Confirm New Password</label>
                <input type="text" name="" id="" class="w-96 p-2 border border-solid rounded-md mt-2 font-medium ml-64" placeholder="Please re-enter the password to confirm">
            </div>
        </div>
    </form>
    <button class="w-28 p-2 bg-text1 ml-64 rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Update</button>
    <button class="w-28 p-2 bg-text1 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Reset</button>
</body>

</html>