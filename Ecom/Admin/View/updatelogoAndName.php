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
    <link rel="stylesheet" href="./resources/css/updateLogoAndName.css">
</head>

<body>
    <main class="  ml-60 h-screen pt-20  w-[80%]">
    
        <div class="ml-16">
            <p class=" text-2xl font-bold py-3">Update Logo and Business Name</p>
            
            <div class="border shadow-2xl mt-5 rounded-xl border-gray-300">
            <div class="p-5">
                <p class="font-bold text-md">Update Logo and Business Name</p>
                <div class="flex justify-evenly items-center mt-5">
                    <p class="w-40">Logo</p>
                    <p>-</p>
                    <div class="flex w-[600px] h-[156px]  border border-dashed border-gray-400 items-center justify-center">
                        <p>Drop here</p>
                        <img src="./resources/img/square-2-stack-solid.svg" alt="" class=" w-10">
                    </div>
                </div>
                <div class="flex justify-evenly items-center py-5">
                    <p class=" w-40">Bussiness Name</p>
                    <p>-</p>
                    <input type="text" class="flex w-[600px] h-[45px] rounded-lg border shadow-lg border-gray-400 items-center justify-center outline-none"
                    placeholder="Kyawswar">
                </div>
            </div>
            <div class="py-10 pl-[90%] w-full">
            <button class="py-1 px-4 text-white rounded-md bg-blue-600">Update</button>
            </div>
            
        
      
        </div>
    </main>
</body>

</html>