<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Plan</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <ion-icon name="arrow-back-outline" class="m-2 text-3xl"></ion-icon>
    <ion-icon name="close-circle-outline" class="float-right m-2 text-3xl"></ion-icon>
    <p class=" font-poppins text-center text-2xl">Choose Your Plan</p>
    <p class=" font-poppins text-center font-normal">Free for small businesses. Paid for bigger companies.</p>
    <div class="flex items-center justify-center space-x-10 m-10">
        <!--Card 1-->
        <div class="w-64 h-80 border border-solid drop p-4 rounded-lg border-black drop-shadow-xl">
            <p class=" text-center text-lg font-poppins m-2">Beginner</p>
            <hr>
            <span class=" ml-16 text-text1 text-2xl font-semibold">$10<span class="text-sm text-btn">/month</span></span>
            <hr>
            <ul class=" list-disc m-2 text-gray-600 text-sm space-y-2">
                <li>sell limit items 50 </li>
                <li>products item can upload 2 times each
                    day.</li>
                <li>can add new 2 products each day.</li>
            </ul>
            <button class="bg-btn w-32 h-10 rounded-xl drop-shadow-xl ml-10 m-5  text-black hover:bg-text1 hover:text-white">Choose Plan</button>
        </div>
        <!--Card 2-->
        <div class=" w-80 h-[450px] border border-solid drop p-4 rounded-lg border-red-400 drop-shadow-xl">
            <p class=" text-center text-lg font-poppins m-2">Professional</p>
            <hr>
            <span class=" ml-16 text-text1 text-2xl font-semibold">$50<span class="text-sm text-btn">/month</span></span>
            <hr>
            <ul class=" list-disc  text-gray-600 text-sm space-y-2 m-2">
                <li>unlimited sell limit items </li>
                <li>products item can upload unlimited each
                    day.</li>
                <li>can add unlimited new products each day.</li>
                <li>can add unlimited new products each day.</li>
                <li>lorem upsum lorem</li>
                <li>lorem upsum lorem</li>
            </ul>
            <button class="bg-btn w-32 h-10 rounded-xl drop-shadow-xl ml-16 m-5 text-black hover:bg-text1 hover:text-white">Choose Plan</button>
        </div>
        <!--Card 3-->
        <div class="w-64 h-80 border border-solid drop p-4 rounded-lg border-black drop-shadow-xl">
            <p class=" text-center text-lg font-poppins m-2">Advanced</p>
            <hr>
            <span class=" ml-16 text-text1 text-2xl font-semibold">$30<span class="text-sm text-btn">/month</span></span>
            <hr>
            <ul class=" list-disc m-2 text-gray-600 text-sm space-y-2">
                <li>sell limit items 100 </li>
                <li>products item can upload 5 times each
                    day.</li>
                <li>can add new 5 products each day.</li>
            </ul>
            <button class="bg-btn w-32 h-10 rounded-xl drop-shadow-xl ml-10 m-5  text-black hover:bg-text1 hover:text-white">Choose Plan</button>
        </div>
    </div>
</body>

</html>