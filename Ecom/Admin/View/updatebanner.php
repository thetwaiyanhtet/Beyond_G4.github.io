<?php
include "./adminsidebar.php";
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Update Banner</title>
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
            <div class="bg-white flex flex-col   items-center  rounded w-[100%] ">
                <div class="flex items-center w-full mb-5">
                    <p class="mr-3">Banner 1</p>
                    <p class=" ml-10 mr-10">-</p>
                    <div class=" w-full shadow-xl border-2 border-blue-950">
                        <label for="photo1">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg1" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo1" accept=".png,.jpeg" name="photo1">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 2</p>
                    <p class=" ml-10 mr-10">-</p>
                    <div class=" w-full   shadow-xl border-2 border-blue-950">
                        <label for="photo2">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg2" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo2" accept=".png,.jpeg" name="photo2">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 3</p>
                    <p class=" ml-10 mr-10">-</p>
                    <div class=" w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo3">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg3" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo3" accept=".png,.jpeg" name="photo3">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 4</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo4">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg4" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo4" accept=".png,.jpeg" name="photo4">
                    </div>
                </div>

                <div class="flex items-center w-full mt-5">
                    <p>Banner 5</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo5">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg5" alt="">
                        </label>
                        <input name="photo5" type="file" class="hidden" id="photo5">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 6</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo6">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg6" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo6" accept=".png,.jpeg" name="photo6">
                    </div>
                </div>

                <div class="flex items-center w-full mt-5">
                    <p>Banner 7</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo7">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg7" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo7" accept=".png,.jpeg" name="photo7">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 8</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo8">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg8" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo8" accept=".png,.jpeg" name="photo8">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 9</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo9">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg9" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo9" accept=".png,.jpeg" name="photo9">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 10</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo10">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg10" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo10" accept=".png,.jpeg" name="photo10">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 11</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo11">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg11" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo11" accept=".png,.jpeg" name="photo11">
                    </div>
                </div>
                <div class="flex items-center w-full mt-5">
                    <p>Banner 12</p>
                    <p class=" ml-10 mr-10">-</p>

                    <div class="w-full    shadow-xl border-2 border-blue-950">
                        <label for="photo12">
                            <img class=" h-80" src="../View/resources/img/1280-425.png" id="photoimg12" alt="">
                        </label>
                        <input type="file" class=" hidden" id="photo12" accept=".png,.jpeg" name="photo12">
                    </div>
                </div>


            </div>
            <div class=" float-right ml-96 pl-52 w-[75%] mt-5">
                <input id="update" type="submit" value="Save" class="bg-blue-600 float-right px-4 rounded-md py-2 text-white"></input>
            </div>
    </form>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/create-file-list"></script>


    <!-- <script>
        document.getElementById('update').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('show');
            document.getElementById('delhid').classList.remove('hidden');
        })
        document.getElementById('no').addEventListener('click', (e) => {
            document.getElementById('delhid').classList.add('hidden');
            document.getElementById('delhid').classList.remove('show');
        })
    </script> -->
    <script>
        document.getElementById('photo5').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;

            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    console.log('File loaded successfully.'); // Add this line
                    document.getElementById("photoimg5").src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
        };

        document.getElementById('photo6').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg6").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };

        
        document.getElementById('photo7').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg7").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };
        
        document.getElementById('photo8').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg8").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };
        
        document.getElementById('photo9').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg9").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };
        
        document.getElementById('photo10').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg10").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };
        
        document.getElementById('photo11').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg11").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };
        
        document.getElementById('photo12').onchange = function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function() {
                    document.getElementById("photoimg12").src = fr.result;
                }
                fr.readAsDataURL(files[0]);

            }
        };
    </script>
</body>

</html>