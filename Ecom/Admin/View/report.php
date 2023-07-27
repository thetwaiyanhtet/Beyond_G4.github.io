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
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/report.css">
</head>

<body>
    <main class="  ml-60 h-screen pt-20  w-[80%] font-Inter">
    
        <div class="ml-10">
            <p class=" text-2xl font-bold py-3">Report</p>
            
            <div class="border shadow-2xl mt-5 rounded-xl border-gray-300">
            <div class="p-5">
                <p class="font-semibold text-[25px]">Export to CSV</p>
                <div class="flex justify-evenly p-7 font-medium text-[20px]">
                    <div class="flex flex-col space-y-12">
                        <button class=" py-2 px-8 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">Order List</button>
                        <button class="py-2 px-8 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">Category List</button>
                    </div>
                    <div class="flex flex-col space-y-12">
                        <button class="py-2 px-6 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">Trending Store List</button>
                        <button class="py-2 px-6 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">Bussiness Plan</button>
                    </div>
                </div>
                
            </div>
           
            
        
      
        </div>
    </main>
</body>

</html>