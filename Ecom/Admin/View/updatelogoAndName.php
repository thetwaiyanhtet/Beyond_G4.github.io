<?php
include "./adminsidebar.php";
 include "../Controller/logoandbusinessController.php";
// include "../Controller/updatelogoandnameController.php";
$logoandname = $_SESSION["m_logo"];
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Update Logo</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./resources/css/updateLogoAndName.css">
    <script src="./resources/js/logo.js" defer></script>
</head>

<body>
    <main class="  ml-60 h-screen pt-20  w-[80%]">

        <div class="ml-16">
            <p class=" text-xl font-bold py-3 font-philosopher">Update Logo and Business Name</p>
            <form action="../Controller/updatelogoandnameController.php" method="post" enctype="multipart/form-data">
                <div class="border shadow-2xl mt-5 rounded-xl border-gray-300">
                    <div class="p-5">
                        <p class="font-bold text-md">Update Logo and Business Name</p>
                        <div class="flex justify-evenly items-center mt-5">
                            <p class="w-40">Logo</p>
                            <p>-</p>
                            <div class="flex w-[600px] h-[156px] border-gray-400 items-center justify-center">
                                <label for="logo">
                                    <img class="w-28 h-28" src="<?= $logoandname[0]['logo'] ?>" id="logorec" alt="">
                                </label>
                                <input type="file" class=" hidden" id="logo" accept=".png,.jpeg,.gif" name="logo">
                            </div>
                        </div>
                        <div class="flex justify-evenly items-center py-5">
                            <p class=" w-40">Bussiness Name</p>
                            <p>-</p>
                            <input type="text" name="business" value="<?= $logoandname[0]['business_name'] ?>" class="flex w-[600px] h-[45px] rounded-lg border shadow-lg border-gray-400 items-center justify-center outline-none indent-2" value="">
                        </div>
                    </div>
                    <div class="py-10 mr-10 pl-[90%] w-full">
                        <input type="submit" id="update" value="Update" class="py-2 px-4 text-white rounded-md bg-blue-600"></input>
                    </div>
            </form>


        </div>
    </main>

    </main>
</body>

</html>