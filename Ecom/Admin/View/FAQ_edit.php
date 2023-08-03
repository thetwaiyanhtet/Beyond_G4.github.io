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
    <link rel="stylesheet" href="./resources/css/faq.css">
</head>

<body>
    <main id="main" class="ml-72 mt-24 font-poppins">
        <div class=" px-5 space-y-3">
            <p class=" text-xl font-semibold font-philosopher">FAQs</p>
            <form action="../Controller/updatefaqController.php" method="post">
            <div class="h-auto">
                <div class="flex justify-center items-center p-2">
                    <div class="pr-4">Question 1</div>
                    <textarea name="Q1" id="q1" cols="100" rows="2" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-8">Answer 1</div>
                    <textarea name="A1" id="q1" cols="100" rows="5" class=" rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-4">Question 2</div>
                    <textarea name="Q2" id="q1" cols="100" rows="2" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-8">Answer 2</div>
                    <textarea name="A2" id="q1" cols="100" rows="5" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-4">Question 3</div>
                    <textarea name="Q3" id="q1" cols="100" rows="2" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-8">Answer 3</div>
                    <textarea name="A3" id="q1" cols="100" rows="5" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-4">Question 4</div>
                    <textarea name="Q4" id="q1" cols="100" rows="2" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-8">Answer 4</div>
                    <textarea name="A4" id="q1" cols="100" rows="5" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-4">Question 5</div>
                    <textarea name="Q5" id="q1" cols="100" rows="2" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <div class="flex justify-center items-center p-2">
                    <div class="pr-8">Answer 5</div>
                    <textarea name="A5" id="q1" cols="100" rows="5" class="rounded-md bg-slate-200 p-2"></textarea>
                </div>
                <button type="submit" class="px-5 py-3 text-md text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-xl float-right mb-20">Update</button>
            </div>
            </form>
        </div>
    </main>
</body>

</html>