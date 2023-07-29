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
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/setting.css">
</head>

<body>
    <<<<<<< Updated upstream <header class=" border-gray-300 border-b-2 h-[59px] flex justify-between items-center ml-56">
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
        <div class="ml-64">

            <!-- <div class="ml-60 m-5 flex justify-between border-solid border-b-2 pb-3 w-">
        <p class="text-black mt-2">2023/July/25 -2:00 PM</p>
        <div class="flex space-x-5 justify-center items-center">
            <ion-icon name="moon" class="mt-2 text-xl"></ion-icon>
            <ion-icon name="notifications" class="mt-2 text-xl"></ion-icon>
            <img src="./resources/img/Mask group.png" alt="png" class="w-[50px]">
        </div>
    </div> -->
            <p class="font-poppins text-sm mt-2">Setting</p>
            <p class="underline text-text2  mt-5">Account</p>
            <p class="font-philosopher font-light text-base mt-2">logo</p>
            <div class="border border-dashed w-32 h-32 rounded-xl border-gray-800 m-2">
                <img src="./resources/img/gallery-add.png" alt="photo" class="w-5 m-auto mt-5">
                <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p>
            </div>
            <div class="w-[80%]  border border-solid border-gray-400"></div>
            <form action="">
                <div class="flex space-x-20 mt-2">
                    <div class="flex flex-col">
                        <label for="" class=" text-sm">Shop Name</label>
                        <input type="text" name="" id="" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class=" text-sm">Email</label>
                        <input type="text" name="" id="" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2">
                    </div>
                </div>
                <div class="flex space-x-20 mt-2">
                    <div class="flex flex-col">
                        <label for="" class=" text-sm">Phone number</label>
                        <input type="text" name="" id="" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class=" text-sm">Address</label>
                        <input type="text" name="" id="" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2">
                    </div>
                </div>
                <div class="flex space-x-20 mt-2">
                    <div class="flex flex-col">
                        <label for="" class=" text-sm">facebook</label>
                        <input type="text" name="" id="" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class=" text-sm">Instagram</label>
                        <input type="text" name="" id="" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2">
                    </div>
                </div>
            </form>
            <p class="underline text-text2  mt-5">Update Password</p>
            <form action="" class="w-full h-auto relative">
                <div class="flex flex-col">
                    <label for="" class=" text-sm">Old Password</label>
                    <input type="text" name="" id="" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none " placeholder=" Please enter old password">
                </div>
                <div class="absolute right-[250px] top-0">
                    <div class="flex-col">
                        <div class="flex flex-col">
                            <label for="" class="text-sm ">New Password</label>
                            <input type="text" name="" id="" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none" placeholder="Please enter New password">
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="text-sm mt-2 ">Confirm New Password</label>
                            <input type="text" name="" id="" class="w-96 p-2 border border-solid rounded-md mt-2 font-medium outline-none" placeholder="Please re-enter the password to confirm">
                        </div>
                    </div>
                </div>
            </form>
            <div class="block mt-20">
                <button class="w-28 p-2 bg-text1  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Update</button>
                <button class="w-28 p-2 bg-text1 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Reset</button>
            </div>
        </div>
</body>

</html>