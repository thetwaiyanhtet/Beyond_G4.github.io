<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Detail</title>
    <link rel="stylesheet" href="./resources/lib/tailwind/output.css">
</head>

<body class="bg-my-purple1">
    <nav>
        <img src="../../image/logo.png" alt="..." class="w-16 ml-5 mt-3">
    </nav>
    <header class="grid grid-cols-3 justify-items-center">
        <div class="flex-column bg-slate-200 w-96 rounded-tl-xl rounded-bl-xl space-y-3">
            <div>
                <img src="./resources/img/image 1.png" alt="...">
            </div>
            <div class="flex items-center justify-center space-x-3">
                <img src="./resources/img/image 2.png" alt="...">
                <img src="./resources/img/image 3.png" alt="...">
            </div>
        </div>
        <div class="w-[500px] bg-slate-200 rounded-xl grid col-start-2 col-span-2">
            <h2 class="text-6xl ">Wide-leg Pants</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae pariatur nulla atque nisi magnam deleniti
                illo provident a exercitationem sunt.
            </p>
            <h3>H&M</h3>
            <h1>$749</h1>
            <div class="flex space-x-3">
                <div class="w-5 h-5 bg-black text-white">a</div>
                <div class="w-5 h-5 bg-black">a</div>
                <div class="w-5 h-5 bg-black">a</div>
                <div class="w-5 h-5 bg-black">a</div>
                <div class="w-5 h-5 bg-black">a</div>
            </div>
            <div class="flex space-x-7">
                <h3>Quantity</h3>
                <input type="number" class="border w-20 h-6">
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
                <button class="p-3 bg">Add To Cart</button>
                <button class="p-3">Add To Wishlist</button>
            </div>

        </div>
    </header>


</body>

</html>