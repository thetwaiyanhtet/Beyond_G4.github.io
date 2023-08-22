<?php

include "./adminsidebar.php";
include "../Controller/contactusController.php";
$contact = $_SESSION["m_contactus"];

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Service Edit</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/serviceContact.css">
</head>

<body>
    <main id="main" class=" ml-72 mt-16 font-poppins">
        <div class=" px-5 space-y-3 shadow-2xl">
            <p class=" text-xl font-semibold font-philosopher">Contact Us</p>

            <section class="p-2 pb-6">

                <div class="shadow-xl pb-5">
                    <p class="border border-solid border-b-gray-600 p-4 font-bold">Contact Information</p>
                    <div>
                        <form action="../Controller/updatecontactusController.php" method="post">
                            <div class="flex justify-center mt-3">
                                <div class="w-[430px] ">
                                    <div class="flex items-center justify-between">
                                        <input type="text" name="email" id="" value="<?= $contact[0]['email'] ?>" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <input type="text" name="time" id="" value="<?= $contact[0]['available_time'] ?>" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                                    </div>
                                </div>
                                <div class="w-[430px]">
                                    <div class="flex items-center justify-between">
                                        <input type="text" name="phone" id="" value="<?= $contact[0]['phone'] ?>" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">

                                    </div>
                                    <div class="flex items-center justify-between">
                                        <input type="text" name="address" id="" value="<?= $contact[0]['address'] ?>" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">

                                    </div>
                                    <input type="submit" value="Update" class="px-5 py-2 mr-5 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>