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
    <script src="./resources/js/dateandtime.js " defer></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/setting.css">
</head>

<body>
    <header class=" border-gray-300 border-b-2 h-[82px] flex justify-between items-center ml-56">
        <div class="pl-2">
            <p id="date_time"></p>
        </div>
        <div>
            <ul class="flex space-x-5 items-center pr-3">
                <li><ion-icon name="notifications-outline" class="text-xl"></ion-icon></li>
                <li><img src="./resources/img/amazfit.png" alt="..." width="55px"></li>
            </ul>
        </div>
    </header>
    <div class="ml-56">
        <p class="font-poppins mt-2 font-semibold text-xl pl-5">Setting</p>
        <section class=" p-5">
            <div class=" clear-both w-full rounded-lg p-5 shadow-xl border-2 border-blue-950">
                <section class="flex">
                    <div>
                        <p class=" text-text2 font-philosopher text-lg font-semibold">Account</p>
                        <p class="font-philosopher font-light text-base mt-2">Logo</p>
                        <div class="border border-dashed w-32 h-32 rounded-xl border-gray-800 mt-3">
                            <img src="./resources/img/gallery-add.png" alt="photo" class="w-5 m-auto mt-5">
                            <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p>
                        </div>
                        <!-- <div class="w-[45%]  border border-solid border-gray-400 my-5"></div> -->
                        <form action="">
                            <div class=" space-y-5 pt-7">
                                <div class="flex space-x-10 mt-2">
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Shop Name<span class=" text-red-600">*</span></label>
                                        <input type="text" name="" id="" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="shop###" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Email<span class=" text-red-600">*</span></label>
                                        <input type="text" name="" id="" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="#####@mail.com" required>
                                    </div>
                                </div>
                                <div class="flex space-x-10 mt-2">
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Phone Number<span class=" text-red-600">*</span></label>
                                        <input type="text" name="" id="" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="09*******" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Address<span class=" text-red-600">*</span></label>
                                        <input type="text" name="" id="" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="########" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20 pr-10">
                                <button class="w-28 p-2 mr-2 bg-blue-600  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Cancel</button>
                                <button class="w-28 p-2 bg-blue-600 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class=" ml-20 pl-20 border-l-2 border-gray-300">
                        <p class=" text-text2 font-philosopher text-lg font-semibold">Update Password</p>
                        <form action="" class="w-full h-auto  pt-5">
                            <div class=" space-y-3">
                                <div class="flex flex-col">
                                    <label for="" class=" text-sm">Old Password<span class=" text-red-600">*</span></label>
                                    <input type="text" name="" id="" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none " placeholder=" Please enter old password" required>
                                </div>
                                <div class="flex flex-col">
                                    <label for="" class="text-sm ">New Password<span class=" text-red-600">*</span></label>
                                    <input type="text" name="" id="" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none" placeholder="Please enter New password" required>
                                </div>
                                <div class="flex flex-col">
                                    <label for="" class="text-sm mt-2 ">Confirm New Password<span class=" text-red-600">*</span></label>
                                    <input type="text" name="" id="" class="w-72 p-2 border border-solid rounded-md mt-2 font-medium outline-none" placeholder="Please enter again to confirm" required>
                                </div>
                            </div>
                            <div class=" mt-[173px]">
                                <button class="w-28 p-2 mr-2 bg-blue-600  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Reset</button>
                                <button class="w-28 p-2 bg-blue-600 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Update</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
</body>

</html>