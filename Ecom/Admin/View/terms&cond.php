<?php
include "./adminsidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/termnCondition.css">
</head>

<body>
    <main class=" ml-72 pt-20 h-screen" id="main">
        <p class=" mt-5 font-philosopher font-bold text-xl pb-3">Terms and Conditions</p>
        <form action="../Controller/updatefaqController.php" method="post">
            <div class="h-auto">
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">1.</div>
                    <textarea name="one"  cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">2.</div>
                    <textarea name="two" id="q1" cols="100" rows="2" class=" rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">3.</div>
                    <textarea name="three" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">4.</div>
                    <textarea name="four" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">5.</div>
                    <textarea name="five" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">6.</div>
                    <textarea name="six" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">7.</div>
                    <textarea name="seven" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">8.</div>
                    <textarea name="eith" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">9.</div>
                    <textarea name="nine" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                <div class="pr-4">10.</div>
                    <textarea name="ten" id="q1" cols="100" rows="2" class="rounded-md outline-none bg-slate-200 p-2"></textarea>
                </div>
                <button type="submit" class="px-5 py-3 text-md text-center mr-5 text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right mb-20">Update</button>
            </div>
            </form>

    </main>
</body>

</html>