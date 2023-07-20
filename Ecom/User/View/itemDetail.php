<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-my-purple1 font-serif">
    <nav>
        <img src="./resources/img/logo.png" alt="..." class="w-16 ml-5 mt-3">
    </nav>
    <header class=" flex justify-evenly items-center">
        <div class="flex-column bg-slate-200 rounded-tl-xl rounded-bl-xl space-y-3 m-16">
            <div>
                <img src="./resources/img/image 1.png" alt="...">
            </div>
            <div class="flex items-center justify-center space-x-3">
                <img src="./resources/img/image 2.png" alt="...">
                <img src="./resources/img/image 3.png" alt="...">
            </div>
        </div>
        <div class="w-[500px] bg-slate-200 rounded-xl p-10 flex-col space-y-5">
            <h2 class="text-4xl font-semibold">Wide-leg Pants</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae pariatur nulla atque nisi magnam deleniti
                illo provident a exercitationem sunt.
            </p>
            <h3 class="flex justify-start items-center gap-2"> <div class=" w-10 h-10 bg-slate-500 rounded-full flex items-center justify-center">H</div> H&M</h3>
            <h1>$749</h1>
            <div class="flex space-x-3">
                <div class="w-5 h-5 bg-black text-white"></div>
                <div class="w-5 h-5 bg-stone-600"></div>
                <div class="w-5 h-5 bg-red-600"></div>
                <div class="w-5 h-5 bg-blue-800"></div>
                <div class="w-5 h-5 bg-green-500"></div>
            </div>
            <div class="flex space-x-7">
                <h3>Quantity</h3>
                <input type="number" class="border w-20 h-6 indent-12 shadow-xl" value="1">
            </div>
            <div class="flex space-x-16">
                <h3>Size</h3>
                <ul class="flex space-x-2">
                    <li>XS</li>
                    <li>S</li>
                    <li>M</li>
                    <li>L</li>
                    <li>XL</li>
                </ul>
            </div>
            <div>
                <button class="btn">Add To Cart</button>
                <button class="btn">Add To Wishlist</button>
            </div>
        </div>
    </header>
    <div class="grid grid-cols-6">
        <div class=" col-start-1 text-end"><ion-icon name="caret-back-outline" class="w-10 h-10"></ion-icon></div>
        <div class=" col-start-6 ml-10"><ion-icon name="chatbubble-ellipses-outline" class="w-10 h-10"></ion-icon></div>
    </div>


</body>

</html>