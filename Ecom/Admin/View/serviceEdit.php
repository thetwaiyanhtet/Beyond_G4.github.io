<?php
include "./adminsidebar.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/serviceContact.css">
</head>

<body>
    <main id="main" class=" ml-72 mt-24 font-poppins">
        <div class=" px-5 space-y-3 shadow-2xl">
            <p class=" text-xl font-semibold font-philosopher">About, Service and Contact Us</p>

            <section class="p-2 pb-6">
                <div class="flex justify-around">
                    <div class="w-[430px]">
                        <div class="bg-gray-300 p-4 rounded-lg">
                            About
                            <hr class="bg-gray-800">
                            About pages are personal to you and your company, so the structure of your about page will vary based on what you want to highlight. However, you’ll start with the same writing process. Let’s explore the set-by-step guide to building your about page.
                        </div>
                        <div class="flex items-center justify-between">
                            <input type="text" name="" id="" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                            <button type="button" class="px-5 py-2 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2">Update</button>
                        </div>
                    </div>
                    <div class="w-[430px]">
                        <div class="bg-gray-300 p-4 rounded-lg">
                            Service
                            <hr class="bg-gray-800">
                            About pages are personal to you and your company, so the structure of your about page will vary based on what you want to highlight. However, you’ll start with the same writing process. Let’s explore the set-by-step guide to building your about page.
                        </div>
                        <div class="flex items-center justify-between">
                            <input type="text" name="" id="" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                            <button type="button" class="px-5 py-2 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2">Update</button>
                        </div>
                    </div>
                </div>
                <div class="shadow-xl pb-5">
                    <p class="border border-solid border-b-gray-600 p-4 font-bold">Contact Information</p>
                    <div>
                        <div class="flex justify-around mt-3">
                            <div class="w-[430px] ">
                                <div class="flex items-center justify-between">
                                    <input type="text" name="" id="" placeholder="Jokeemailsample" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                                    <button type="button" class="px-5 py-2 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2">Update</button>
                                </div>
                                <div class="flex items-center justify-between">
                                    <input type="text" name="" id="" placeholder="9:00-5:00" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                                    <button type="button" class="px-5 py-2 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2">Update</button>
                                </div>
                            </div>
                            <div class="w-[430px]">
                                <div class="flex items-center justify-between">
                                    <input type="text" name="" id="" placeholder="09-123456789" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                                    <button type="button" class="px-5 py-2 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2">Update</button>
                                </div>
                                <div class="flex items-center justify-between">
                                    <input type="text" name="" id="" placeholder="Yangon, Myanmar" class="bg-gray-300 w-3/4 my-2 p-2  rounded-lg">
                                    <button type="button" class="px-5 py-2 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right my-2">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>