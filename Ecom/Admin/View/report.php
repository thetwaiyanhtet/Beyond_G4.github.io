<?php
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Reports</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/report.css">
</head>

<body>
    <main class="  ml-60 h-screen pt-20  w-[80%] font-Inter">

        <div class="ml-16">
            <p class=" text-xl font-bold font-philosopher py-3">Report</p>

            <div class="border shadow-md mt-5 rounded-xl border-gray-200">
                <div class="p-5">
                    <p class="font-semibold text-lg text-center">Export to CSV</p>
                    <form method='post' action='../Controller/downloadCSV.php'>
                        <div class="flex justify-evenly p-7 font-medium text-lg">
                            <div class="flex flex-col space-y-12">
                                <a href="./orderlist.php">
                                    <input type='submit' value='Order List' name='export_type' class="py-2 px-8 w-52 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">
                                </a>
                                <a href="./categorylist.php">
                                    <input type='submit' value='Category List' name='export_type' class="py-2 px-8 w-52 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">
                                </a>
                            </div>
                            <div class="flex flex-col space-y-12">
                                <input type='submit' value='Trending Store List' name='export_type' class="py-2 px-6 w-52 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600">
                                <a href="./merchant_list.php">
                                    <input type='submit' value='Business Plan' name='export_type' class="py-2 px-6 w-52 rounded-lg text-white flex items-center justify-center 
                        bg-blue-600"></a>
                            </div>
                        </div>

                </div>




            </div>
    </main>
</body>

</html>