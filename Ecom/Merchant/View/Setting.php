<?php
include "./sidebar.php";
session_start();
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
                        <div class="flex justify-around ">
                            <p class="font-philosopher font-light text-base mt-2">Logo</p>
                            <p class="font-philosopher font-light text-base mt-2">Banner</p>
                        </div>
                        <form action="../Controller/settingController.php" method="post" enctype="multipart/form-data">
                            <div class="flex justify-around">
                                <div class="border border-dashed w-32 h-32 rounded-xl border-gray-800 mt-3">
                                    <label for="photo1" class="cursor-pointer"> <!-- Add cursor-pointer class to show pointer cursor on hover -->
                                        <img src="./resources/img/gallery-add.png" alt="photo" class="w-5 m-auto mt-5" id="photoimg">
                                    </label>
                                    <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p>
                                    <input type="file" class="hidden" id="photo1" accept=".png,.jpeg" name="photo" require>
                                </div>
                                <!-- <div class="border border-dashed w-32 h-32 rounded-xl border-gray-800 mt-3">
                                    <label for="photo1" class="cursor-pointer"> 
                                        <img src="./resources/img/gallery-add.png" alt="photo" class="w-5 m-auto mt-5" id="photoimg">
                                    </label>
                                    <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p>
                                    <input type="file" class="hidden" id="photo1" accept=".png,.jpeg" name="photo" require>
                                </div> -->
                            </div>
                            <div class=" space-y-5 pt-7">
                                <div class="flex space-x-10 mt-2">
                                    <div class="flex flex-col">
                                        <label class=" text-sm">Shop Name<span class=" text-red-600">*</span></label>
                                        <input type="text" name="shopName" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="shop###" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="myTextarea" class=" text-sm">Slogan<span class=" text-red-600">*</span></label>
                                        <textarea id="myTextarea" name="slogan" class="w-72 p-1 border border-solid rounded-md mt-2 outline-none indent-2" placeholder="Our store ******" required></textarea>
                                    </div>
                                </div>
                                <div class="flex space-x-10 mt-2">
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Phone Number<span class=" text-red-600">*</span>

                                        </label>
                                        <input type="text" name="phNo" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="09*******" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Address<span class=" text-red-600">*</span></label>
                                        <input type="text" name="address" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2" placeholder="########" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20 pr-10">
                                <button type="submit" name="cancel" class="w-28 p-2 mr-2 bg-blue-600  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Cancel</button>
                                <button type="submit" name="send" class="w-28 p-2 bg-blue-600 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class=" ml-20 pl-20 border-l-2 border-gray-300">
                        <p class=" text-text2 font-philosopher text-lg font-semibold">Update Password</p>
                        <form action="../Controller/updatePwController.php" method="post" class="w-full h-auto  pt-5">
                            <div class=" space-y-3">
                                <div class="flex flex-col">
                                    <label for="oldPassword" class=" text-sm">Old Password<span class=" text-red-600">*</span>
                                        <p class="text-red-500">
                                            <?php
                                            $_SESSION['message2'];
                                            echo $_SESSION["message2"];
                                            var_dump($_SESSION['message2']);
                                            ?></p>
                                    </label>
                                    <input type="password" name="oldPassword" id="oldPassword" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none " placeholder=" Please enter old password" required>
                                </div>
                                <div class="flex flex-col">
                                    <label for="newPassword" name="" class="text-sm ">New Password<span class=" text-red-600">*</span>
                                        <p class="text-red-500">

                                    </label>
                                    <input type="password" name="newPassword" id="newPassword" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none" placeholder="Please enter New password" required>
                                </div>
                                <div class="flex flex-col">
                                    <label for="confirmPassword" class="text-sm mt-2 ">Confirm New Password<span class=" text-red-600">*</span></label>
                                    <input type="password" name="confirmPassword" id="" class="w-72 p-2 border border-solid rounded-md mt-2 font-medium outline-none" placeholder="Please enter again to confirm" required>
                                </div>
                            </div>
                            <div class=" mt-[173px]">
                                <button type="submit" name="reset" class="w-28 p-2 mr-2 bg-blue-600  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Reset</button>
                                <button type="submit" name="update" class="w-28 p-2 bg-blue-600 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Update</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
</body>

</html>