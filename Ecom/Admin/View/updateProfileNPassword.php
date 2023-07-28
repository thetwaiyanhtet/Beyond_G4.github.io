<?php
include "./adminsidebar.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile and Password</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/setting.css">
</head>

<body>
    <main id="main" class=" ml-72 mt-24">
        <div class=" px-5 space-y-5 pb-5">
            <p class=" text-xl font-semibold font-philosopher">Update Profile and Passwod</p>

            <section class=" border border-gray-400 rounded-lg shadow-lg p-3">
                <p class=" font-semibold">Update Profile</p>
                <div class=" w-[50%] mx-auto space-y-6">
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Profile Picture</p>
                        <p>-</p>
                        <div class=" flex items-center w-80 border-2 border-dashed border-blue-500 px-20 py-10">
                            <p>Drop Here</p>
                            <img src="./resources/img/solar_copy-bold-duotone.png" alt="...">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Username</p>
                        <p>-</p>
                        <div class="">
                            <input type="text" value="KyawSwar" class=" border border-gray-400 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Email</p>
                        <p>-</p>
                        <div class="">
                            <input type="text" value="kyawswarlynn.jkfk" class=" border border-gray-400 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Phone</p>
                        <p>-</p>
                        <div class="">
                            <input type="text" value="09-123456789" class=" border border-gray-400 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                </div>
                <div class=" justify-end flex pr-5 py-3">
                    <button class=" font-playfairDisplay px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md">Update</button>
                </div>
            </section>

            <section class="border border-gray-400 rounded-lg shadow-lg p-3">
                <p class=" font-semibold">Change Password</p>
                <div class=" w-[50%] mx-auto space-y-6 pt-3">
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Current Password</p>
                        <p>-</p>
                        <div class="">
                            <input type="password" value="kyawswar1234" class=" border border-gray-400 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">New Password</p>
                        <p>-</p>
                        <div class="">
                            <input type="password" value="kyawswarlynn" class=" border border-gray-400 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Confirm Password</p>
                        <p>-</p>
                        <div class="">
                            <input type="password" value="kyawswarlynn" class=" border border-gray-400 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                </div>
                <div class=" justify-end flex pr-5 py-3">
                    <button class=" font-playfairDisplay px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md">Change</button>
                </div>
            </section>
        </div>


    </main>
</body>

</html>