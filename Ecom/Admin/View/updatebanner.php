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
    <link rel="stylesheet" href="./resources/css/updateBanners.css">
    <script src="../View/resources/js/image..js" defer></script>
</head>

<body>
    <div class=" ml-72 pt-20 ">
        <p class="text-black font-bold text-xl font-philosopher pt-3">Update Banner</p>
    </div>
    <form action="../Controller/updatebannerController.php" method="post" enctype="multipart/form-data">
    <div class="m-3 border w-[77%] p-5 rounded-lg float-right ml-10 text-center shadow-2xl">
        <div class="bg-white p7 flex flex-col float-left  items-center  rounded w-[100%] space-y-5">
            <div class="flex items-center">
                <p>Banner 1</p>
                <p class=" ml-10 mr-10">-</p>
                <div class=" w-96 h-96    shadow-xl border-2 border-blue-950">
                        <label for="photo1">
                            <img class="w-96 h-96" src="../View/resources/img/amazfit.png" id="photoimg1" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo1" accept=".png,.jpeg" name="photo1">
                    </div>
            </div>
            <div class="flex items-center">
                <p>Banner 2</p>
                <p class=" ml-10 mr-10">-</p>
                <div class=" w-96 h-96    shadow-xl border-2 border-blue-950">
                        <label for="photo2">
                            <img class="w-96 h-96" src="../View/resources/img/amazfit.png" id="photoimg2" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo2" accept=".png,.jpeg" name="photo2">
                    </div>
            </div>
            <div class="flex items-center">
                <p>Banner 3</p>
                <p class=" ml-10 mr-10">-</p>
                <div class=" w-96 h-96    shadow-xl border-2 border-blue-950">
                        <label for="photo3">
                            <img class="w-96 h-96" src="../View/resources/img/amazfit.png" id="photoimg3" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo3" accept=".png,.jpeg" name="photo3">
                    </div>
            </div>
            <div class="flex items-center">
                <p>Banner 4</p>
                <p class=" ml-10 mr-10">-</p>
               
                    <div class=" w-96 h-96    shadow-xl border-2 border-blue-950">
                        <label for="photo4">
                            <img class="w-96 h-96" src="../View/resources/img/amazfit.png" id="photoimg4" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo4" accept=".png,.jpeg" name="photo4">
                    </div>
                    </div>
                    <input type="text" name="ky" >
                    <div class=" float-right ml-96">
                        <input id="update" type="submit" value="Save" class="bg-blue-600 px-4 rounded-md py-2 text-white"></input>
                    </div>
              
           
        </div>
        </form>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://unpkg.com/create-file-list"></script>
       

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
            document.getElementById('no').addEventListener('click', (e) => {
                document.getElementById('delhid').classList.add('hidden');
                document.getElementById('delhid').classList.remove('show');
            })
        </script>
</body>

</html>