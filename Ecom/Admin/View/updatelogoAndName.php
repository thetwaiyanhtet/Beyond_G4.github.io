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
            <p class=" text-xl font-bold py-3 font-philosopher">Update Logo and Business Name</p>
            
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
                    <input type="text" class="flex w-[600px] h-[45px] rounded-lg border shadow-lg border-gray-400 items-center justify-center outline-none indent-2"
                    placeholder="Kyawswar">
                </div>
            </div>
            <div class="py-10 pl-[90%] w-full">
            <button id="update" class="py-2 px-4 text-white rounded-md bg-blue-600">Update</button>
            </div>
            
        
      
        </div>
        <div id="delhid" class=" absolute top-20 mt-40 ml-60 hidden">
                <?php
                include "./savepop-up.php";
                ?>
            </div>
    </main>
    <script>
        document.getElementById('update').addEventListener('click', (e) => {
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