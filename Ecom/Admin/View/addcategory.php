<?php
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main id="main" class="  ml-60 h-screen pt-20  w-[80%]">
    
        <div class="ml-10">
            <p class=" text-2xl font-bold font-philosopher">Myanmar Chest</p>
            <div class=" flex items-center mt-5">
                <span class="text-xl">Search : </span>
                <input class="bg-gray-300 ml-3 w-52 outline-none rounded-lg h-8" type="search" name="" id="">
            </div>
            <div class="border shadow-2xl h-72 mt-10 rounded-xl">
            <div class="p-5">
                <p class="font-bold text-xl">Edit Categories</p>
                <div class="flex justify-around">
                    <div class="space-y-3 mt-5">
                        <p>Category</p>
                        <input class=" outline-none border rounded-md cursor-text h-8 w-72" type="text">
                    </div>
                    <div class="flex flex-col justify-start space-y-3 mt-5">
                        <p>Description</p>
                        <textarea class="border outline-none" id="text" name="text" rows="4" cols="50"></textarea>
                    </div>
                </div>
            </div>
            <button class="py-1 px-4 float-right text-white rounded-md bg-blue-600 mr-16">Save</button>
        
      
        </div>
    </main>
</body>

</html>