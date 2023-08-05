<?php

session_start();
$admin = $_SESSION["m_admin"];
include "../Controller/updatepasswordController.php";

?>

<!doctype html>
<html>



<?php include "./adminsidebar.php";?>;
<?php include "../Controller/updatepasswordController.php" ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile and Password</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/setting.css">
    <script src="../View/resources/js/admin.js" defer></script>
</head>

<body>
    <main id="main" class=" ml-72 mt-24">
        <div class=" px-5 space-y-5 pb-5">
            <p class=" text-xl font-semibold font-philosopher">Update Profile and Passwod</p>
            <form action="../Controller/updateprofileController.php" method="post" enctype="multipart/form-data">
            <section class=" border border-gray-400 rounded-lg shadow-lg p-3">
                <p class=" font-semibold">Update Profile</p>
                <div class=" w-[50%] mx-auto space-y-6">
                    <div class=" flex items-center justify-start">
                        <p class=" w-40">Profile Picture - </p>
                        <div class=" w-40 h-40    shadow-xl border-2 border-blue-950">
                        <label for="profile1">
                            <img class="w-40 h-40" src="<?=($admin[0]['p_picture'])?>" id="profileimg1" alt="">
                        </label>
                        <input type="file" class="hidden" id="profile1" accept=".png,.jpeg" name="profile1">
                    </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Username</p>
                        <p>- </p>
                        <div class="">
                            <input type="text" name="username" require  value="<?= $admin[0]['username'] ?>" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Email</p>
                        <p>-</p>
                        <div class="">
                            <input type="email" name="email" require value="<?= $admin[0]['email'] ?>" class=" border border-gray-400 ml-3 rounded-md shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Phone</p>
                        <p>-</p>
                        <div class="">
                            <input type="text" name="phone" require value="<?= $admin[0]['phone'] ?>" class=" border border-gray-400 rounded-md  ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                </div>
                <div class=" justify-end flex pr-5 py-3">
                    <input id="updates" type="submit" value="Update" class=" font-playfairDisplay px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md"></input>
                </div>
            </section>
            </form>
            <section class="border border-gray-400 rounded-lg shadow-lg p-3">
                <p class=" font-semibold">Change Password</p>
                <div class=" w-[50%] mx-auto space-y-6 pt-3">
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Current Password</p>
                        <p>-</p>
                        <form action="../Controller/passwordchangeContoller.php" method="post">
                        <div class="">
                            <input type="password" value="" name="current" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">New Password</p>
                        <p>-</p>
                        <div class="">
                            <input type="password" value="" name="new"  class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                    <div class=" flex items-center justify-between">
                        <p class=" w-40">Confirm Password</p>
                        <p>-</p>
                        <div class="">
                            <input type="password" value="" name="confirm" class=" border border-gray-400 rounded-md ml-3 shadow-md indent-2 px-2 py-1 outline-none w-80">
                        </div>
                    </div>
                   
                </div>
                <div class=" justify-end flex pr-5 py-3">
                    <button id="update" type="submit" name="updated" value="Change" class=" font-playfairDisplay px-3 py-2 bg-blue-500 text-white rounded-lg shadow-md">Change</button>
                </div>
                </form>
            </section>
        </div>
        <div id="delhid" class=" absolute top-20 mt-40 ml-60 hidden">
                <?php
                include "./savepop-up.php";
                ?>
            </div>

    <script>
        document.getElementById('update').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('show');
            document.getElementById('delhid').classList.remove('hidden');
        })
        document.getElementById('updates').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('show');
            document.getElementById('delhid').classList.remove('hidden');
        })
        document.getElementById('no').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('hidden');
            document.getElementById('delhid').classList.remove('show');
        })
    </script>

    </main>
</body>

</html>